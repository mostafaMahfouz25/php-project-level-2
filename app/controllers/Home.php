<?php 


namespace App\Controllers;
use Core\Controller;
use Core\DB;
use Core\View;

class Home extends Controller
{
    private $db;


    public function __construct()
    {
        $this->db = new DB;
    }


    public function home()
    {
        $data['active'] = "index";
        $data['courses'] = $this->db->table("courses")->select()->limit(6)->get();
        return new View('home',$data);
    }


    public function courses()
    {
        $data['active'] = "courses";
        $data['courses'] = $this->db->table("courses")->select()->get();
        return new View('courses',$data);
    }

    
    public function contact()
    {
        $data['active'] = "contact";
        return new View('contact',$data);
    }


    public function sendMessage()
    {
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
            $name = $this->request()->post("name");
            $email = $this->request()->post("email");
            $subject = $this->request()->post("subject");
            $message = $this->request()->post("message");
            $data = ['mes_name'=>$name,'mes_email'=>$email,'mes_subject'=>$subject,'mes_message'=>$message];
            $this->db->table('messages')->insert($data)->save();
            $this->session()->set("success","Your Message Have Been Sent Successfully :)");
        }

        $this->router()->redirect();
    }



}