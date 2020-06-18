<?php 
require_once('../../config/autoload.php');

$message = new \App\Controllers\MessagesAdmin;

// switch to correct page 
switch ($route->prepareURL()[1]) {
    
    case 'messages':
        $message->home();
            break;
    case 'delete-message':
        $message->delete();
            break;
    
    default:
        # code...
        break;
}