<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\DB;
use Core\Upload;


class CoursesAdmin extends Controller
{

    private $db;
    private $file;

    public function __construct()
    {
        if(!session()->has("admin_name"))
        {
            $this->router()->go(AURL.'login');
        }
        $this->db = new DB;
    }

    public function home()
    {
        
        $courses = $this->db->table("courses")->select()->get();
        $data["active"] = "courses";
        $data['courses'] = $courses;
        return new View('admin/courses/home',$data);
    }


    public function add()
    {
        $data["active"] = "courses";
        $data['cats'] = $this->db->table("categories")->select()->get();
        return new View('admin/courses/add',$data);
    }


    public function store()
    {
 
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {

            $title = $this->request()->post("title");
            $description = $this->request()->post("description");
            $category_id = $this->request()->post("category_id");

            // upload file 
            $this->file = new Upload;
            $upload = $this->file->load('image',UPLOADS);
            if(!$upload)
            {
                $data['errors'] = $this->file->showErrors();
            }
            else 
            {
                $dataInsert = ['co_category_id'=> $category_id,
                'co_title'=>$title,
                'co_description'=>$description,
                'co_image'=>$this->file->newName()];
                $this->db->table('courses')->insert($dataInsert)->save();
            }

            
            $this->session()->set("success","Added Success");
        }

        $this->router()->redirect();
    }




    public function edit()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("courses")->select()->where('co_id','=',$id)->getOne();
        if($row && count($row))
        {
            $data["active"] = "courses";
            $data["row"] = $row;
            $data['cats'] = $this->db->table("categories")->select()->get();
            return new View('admin/courses/edit',$data);
        }
    }


    public function update()
    {
 
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
            $id = (int) $this->request()->post("id");
            $title = $this->request()->post("title");
            $description = $this->request()->post("description");
            $category_id = $this->request()->post("category_id");

            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '')
            {
                // upload file 
                $this->file = new Upload;
                $upload = $this->file->load('image',UPLOADS);
                if(!$upload)
                {
                    $data['errors'] = $this->file->showErrors();
                }
                else 
                {   
                    $row = $this->db->table("courses")->select()->where('co_id','=',$id)->getOne();
                    $this->file->deleteImage(UPLOADS.$row['co_image']);

                    $dataInsert = ['co_category_id'=> $category_id,
                    'co_title'=>$title,
                    'co_description'=>$description,
                    'co_image'=>$this->file->newName()];
                    $this->db->table('courses')->update($dataInsert)->where('co_id','=',$id)->save();
                    $this->session()->set("success","Updated Success");
                }
            }
            else 
            {

                $dataInserted = ['co_category_id'=> $category_id,
                    'co_title'=>$title,
                    'co_description'=>$description];
                $this->db->table('courses')->update($dataInserted)->where("co_id","=",$id)->save();
                $this->session()->set("success","Updated Success");
            }
             

        }

        $this->router()->redirect();
        
    }









    public function delete()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("courses")->select()->where('co_id','=',$id)->getOne();
        if(count($row))
        {
            // delete image 
            $this->file = new Upload;
            $this->file->deleteImage(UPLOADS.$row['co_image']);

            // delete course 
            $this->db->table("courses")->delete()->where('co_id','=',$id)->save();
            $this->session()->set("deleted-success","Deleted Success");
        }
        $this->router()->redirect();
    }


}