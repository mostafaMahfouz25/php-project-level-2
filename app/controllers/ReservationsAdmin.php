<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\DB;


class ReservationsAdmin extends Controller
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
        $reservations = $this->db->table("reservations")->select()->innerJoin("courses","res_co_id","co_id")->get();
        $data["active"] = "reservations";
        $data['reservations'] = $reservations;
        return new View('admin/reservations/home',$data);
    }


    public function delete()
    {
        $id = $this->request()->get('id');
        $row = $this->db->table("reservations")->select()->where('res_id','=',$id)->getOne();
        if(count($row))
        {
            $this->db->table("reservations")->delete()->where('res_id','=',$id)->save();
            $this->session()->set("deleted-success","Deleted Success");
        }
        $this->router()->goBack();
    }


}