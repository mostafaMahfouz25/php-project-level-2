<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\DB;


class MessagesAdmin extends Controller
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
        $messages = $this->db->table("messages")->select()->get();
        $data["active"] = "messages";
        $data['messages'] = $messages;
        return new View('admin/messages/home',$data);
    }


    public function delete()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("messages")->select()->where('mes_id','=',$id)->getOne();
        if(count($row))
        {
            $this->db->table("messages")->delete()->where('mes_id','=',$id)->save();
            $this->session()->set("deleted-success","Deleted Success");
        }
        $this->router()->redirect();
    }


}