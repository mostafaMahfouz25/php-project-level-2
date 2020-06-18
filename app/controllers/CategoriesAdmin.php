<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\DB;


class CategoriesAdmin extends Controller
{

    private $db;

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
        
        $cats = $this->db->table("categories")->select()->get();
        $data["active"] = "categories";
        $data['cats'] = $cats;
        return new View('admin/categories/home',$data);
    }


    public function add()
    {
        $data["active"] = "categories";
        return new View('admin/categories/add',$data);
    }


    public function store()
    {
 
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
            $name = $this->request()->post("name");
            $data = ['cat_name'=>$name];
            $this->db->table('categories')->insert($data)->save();
            $this->session()->set("success","Added Success");
        }

        $this->router()->redirect();
        
    }




    public function edit()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("categories")->select()->where('cat_id','=',$id)->getOne();
        if($row && count($row) )
        {
            $data["active"] = "categories";
            $data["row"] = $row;
            return new View('admin/categories/edit',$data);
        }
    }


    public function update()
    {
 
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
            $name = $this->request()->post("name");
            $id = $this->request()->post("id");
            $data = ['cat_name'=>$name];
            $this->db->table('categories')->update($data)->where('cat_id','=',$id)->save();
            $this->session()->set("success","Updated Success");
        }

        $this->router()->redirect();
        
    }









    public function delete()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("categories")->select()->where('cat_id','=',$id)->getOne();
        if(count($row))
        {
            $this->db->table("categories")->delete()->where('cat_id','=',$id)->save();
            $this->session()->set("deleted-success","Deleted Success");
        }
        $this->router()->redirect();
    }


}