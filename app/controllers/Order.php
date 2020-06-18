<?php 


namespace App\Controllers;
use Core\Controller;
use Core\DB;
use Core\View;

class Order extends Controller
{
    private $db;


    public function __construct()
    {
        $this->db = new DB;
    }

    
    public function order()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("courses")->select()->where('co_id','=',$id)->getOne();
        if($row && count($row))
        {
            $data["active"] = "courses";
            $data["row"] = $row;
            return new View('order',$data);
        }
    }


    public function addOrder()
    {
        if($this->request()->getMethod() == "POST" && $this->request()->post("submit"))
        {
            $name = $this->request()->post("name");
            $email = $this->request()->post("email");
            $phone = $this->request()->post("phone");
            $course = $this->request()->post("course");
            $data = ['res_co_id'=>$course,'name'=>$name,'email'=>$email,'phone'=>$phone];
            $this->db->table('reservations')->insert($data)->save();
            $this->session()->set("success","Your Request Have Been Sent Successfully :)");
        }

        $this->router()->goBack();
    }



}