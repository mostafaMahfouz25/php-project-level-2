<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\DB;


class Auth extends Controller
{
    private $db;
    public function __construct()
    {
        if(!$this->request()->post("logout") && session()->has("admin_name"))
        {
            header("location:".AURL);
        }
        $this->db = new DB;
    }


    public function login()
    {
        return new View('admin/auth/login');
    }


    public function doLogin()
    {
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
       
            $email = $this->request()->post("email");
            $password = $this->request()->post("password");

            $row = $this->db->table("admins")->select()->where('admin_email','=',$email)->getOne();
            if($row && count($row) )
            {
                $check = password_verify($password,$row['admin_password']);
                if($check)
                {
                    session()->set('admin_name',$row['admin_name']);
                    session()->set('admin_email',$row['admin_email']);
                    
                    header("location:".AURL);
                }
                else 
                {
                    $data['error'] = "Email Or Password Not Correct";
                }
            }
            else 
            {
                $data['error'] = "Email Not Exist";
            }

        }
        else 
        {
            $data['error'] = "Please Fill All Fields !";
        }
        return new View('admin/auth/login',$data);
        // $this->router()->redirect();
        
    }


    public function logout()
    {
        if($this->request()->getMethod() == "POST" && $this->request()->post("logout"))
        {
            session()->destroy();
            header("location:".AURL.'login');
        }
    }











  


}