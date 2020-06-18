<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\DB;



class ManagersAdmin extends Controller
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
        
        $managers = $this->db->table("admins")->select()->get();
        $data["active"] = "managers";
        $data['managers'] = $managers;
        return new View('admin/managers/home',$data);
    }


    public function add()
    {
        $data["active"] = "managers";
        return new View('admin/managers/add',$data);
    }


    public function store()
    {
 
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {

            $name = $this->request()->post("name");
            $email = $this->request()->post("email");
            $password = $this->request()->post("password");

            $password = password_hash($password,PASSWORD_DEFAULT);
            $dataInsert = [ 'admin_name'=> $name,
                            'admin_email'=>$email,
                            'admin_password'=>$password];
            $this->db->table('admins')->insert($dataInsert)->save();
            $this->session()->set("success","Added Success");
        }

        $this->router()->redirect();
    }




    public function edit()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("admins")->select()->where('admin_id','=',$id)->getOne();
        if($row && count($row))
        {
            $data["active"] = "managers";
            $data["row"] = $row;
            return new View('admin/managers/edit',$data);
        }
    }


    public function update()
    {
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
            $id = (int) $this->request()->post("id");
            $name = $this->request()->post("name");
            $email = $this->request()->post("email");
            $password = $this->request()->post("password");

            $password = password_hash($password,PASSWORD_DEFAULT);
            $dataInsert = [ 'admin_name'=> $name,
                            'admin_email'=>$email,
                            'admin_password'=>$password];
            $this->db->table('admins')->update($dataInsert)->where('admin_id','=',$id)->save();
            $this->session()->set("success","Updated Success");
        }
        $this->router()->redirect();
    }




    public function delete()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("admins")->select()->where('admin_id','=',$id)->getOne();
        if(count($row))
        {
            $this->db->table("admins")->delete()->where('admin_id','=',$id)->save();
            $this->session()->set("deleted-success","Deleted Success");
        }
        $this->router()->redirect();
    }


}