<?php 


namespace Core;

class View 
{
    protected $view_name;
    protected $view_data;
    public function __construct($view,$data=[])
    {
        $this->view_name = $view;
        if($this->checkFromFile())
        { 
            $this->view_data =$data;
            ob_start();
                extract($this->view_data);
                include(VIEWS.$this->view_name.'.php');
            ob_end_flush();
        }
        else 
        {
            $error = "This File : " . $this->view_name . " Does Not Exist ! ";
            ob_start();
                include(VIEWS.'errors/notfound.php');
            ob_end_flush();
        }
        

    }

    

    // check if file exist or not 
    private function checkFromFile()
    {
        if(file_exists(VIEWS.$this->view_name.'.php'))
        {
            return true;
        }
        return false;
    }



}