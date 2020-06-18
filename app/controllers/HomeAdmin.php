<?php 


namespace App\Controllers;
use Core\Controller;
use Core\View;

class HomeAdmin extends Controller
{
    

    public function __construct()
    {
        if(!session()->has("admin_name"))
        {
            $this->router()->go(AURL.'login');
        }
        $data['active'] = "home";
        return new View('admin/home',$data);
    }
}