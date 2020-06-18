<?php 

namespace Core;


class Cookie 
{




    /**
     * 
     * set new value at session 
     * @param string $key  => key of session 
     * @param  $value  => value  of session 
     * @return mixid
     */
    public function set($key,$value,$seconds)
    {
       setcookie($key,$value,time()+$seconds,'','',false,true);
    }



    /**
     * 
     * set new value at session 
     * @param string $key  => key of session  
     * @return mixid
     */
    public function get($key)
    {
        return array_get($_COOKIE,$key);
    }








    /**
     * 
     * check if session exist 
     * @param string $key  => key of session  
     * @return bool 
     */
    public function has($key)
    {
        if(isset($_COOKIE[$key]))
        {
            return true;
        }
        return false;
    }


    public function all()
    {
        return $_COOKIE;
    }


    /**
     * remove key from session 
     * @param string $key
     * @return void
     */
    public function remove($key)
    {
        setcookie($key,null,-1);
        unset($_COOKIE[$key]);
    }


    /**
     * clear session 
     */
    public function destroy($key)
    {
       foreach(array_keys($this->all()) as $key)
       {
            $this->remove($key);
       }
    }






}