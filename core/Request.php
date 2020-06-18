<?php 


namespace Core;

class Request 
{
    

    /**
     * get post data  
     * @param string $key 
     * @param mixid $default 
     * @return string 
     */

    public  function get($key,$default=null)
    {
        return array_get($_GET,$key,$default);
    }


    /**
     * get post data  
     * @param string $key 
     * @param mixid $default
     * @return mixid
     */

    public  function post($key,$default=null)
    {
        return array_get($_POST,$key,$default);
    }


    /**
     * get basic url 
     */
    public  function url()
    {
        return $this->server('REQUEST_SCHEME') . "://" . $this->server('HTTP_HOST') . "/";
    }


     /**
     * get basic url 
     */
    public function getMethod()
    {
        return $this->server('REQUEST_METHOD');
    }




    /**
     * get server information 
     * @param string $key 
     * @param mixid $default
     */
    public function server($key,$default=null)
    {
        return array_get($_SERVER,$key,$default);
    }
}