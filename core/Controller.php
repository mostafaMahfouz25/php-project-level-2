<?php 

namespace Core;

use Core\Request;
use Core\Session;
use Core\Router;


class Controller 
{
    protected $request;
    protected $router;
    protected $session;


    protected function request()
    {
        $this->request = new Request;
        return $this->request;
    }

    protected function router()
    {
        $this->router = new Router;
        return $this->router;
    }


    protected function session()
    {
        $this->session = new Session;
        return $this->session;
    }


    


}