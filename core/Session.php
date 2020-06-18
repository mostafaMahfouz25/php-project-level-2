<?php 

namespace Core;


class Session 
{

    // start session 
    public function __construct()
    {
        if(!session_id())
        {
            session_start();
        }
    }



    /**
     * 
     * set new value at session 
     * @param string $key  => key of session 
     * @param  $value  => value  of session 
     * @return mixid
     */
    public function set($key,$value)
    {
       $_SESSION[$key] = $value;
    }



    /**
     * 
     * set new value at session 
     * @param string $key  => key of session  
     * @return mixid
     */
    public function get($key)
    {
        return array_get($_SESSION,$key);
    }



    /**
     * 
     * get value of session  for one time
     * @param string $key  => key of session  
     * @return mixid
     */
    public function flash($key)
    {
        $value = $_SESSION[$key];
        $this->remove($key);
        return $value;
    }


    public function all()
    {
        return $_COOKIE;
    }




    /**
     * 
     * check if session exist 
     * @param string $key  => key of session  
     * @return bool 
     */
    public function has($key)
    {
        if(isset($_SESSION[$key]))
        {
            return true;
        }
        return false;
    }


    /**
     * remove key from session 
     * @param string $key
     * @return void
     */
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }


    /**
     * clear session 
     */
    public function destroy()
    {
        unset($_SESSION);
        session_destroy();
    }






}