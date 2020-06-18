<?php 

namespace Core;

class Router 
{

    public static function prepareURL()
    {
        $url = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),"/");
        $uriSegments = explode("/", $url);
        return $uriSegments;
    }


    public static function redirect($url='',$s=0)
    {
        if($url == '')
        {
            $url = $_SERVER['HTTP_REFERER'];
        }
        header("refresh:".$s.";url=".$url);
    }

    public static function go($url)
    {
        header("location:".$url);
    }

    // return to previous route
    public  function goBack()
    {
        $url = $_SERVER['HTTP_REFERER'];
        header("location:".$url);
    }


    


    
}