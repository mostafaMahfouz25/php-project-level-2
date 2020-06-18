<?php 
require_once('../config/autoload.php');


$home = new \App\Controllers\Home;


switch ($route->prepareURL()[0]) 
{
    case 'courses':
        $home->courses();
        break;

    case 'contact':
        $home->contact();
        break;

    case 'send-message':
        $home->sendMessage();
        break;
    
    default:
        $home->home();
        break;
}