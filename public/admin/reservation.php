<?php 
require_once('../../config/autoload.php');

$res = new \App\Controllers\ReservationsAdmin;

// switch to correct page 
switch ($route->prepareURL()[1]) {
    
    case 'reservations':
        $res->home();
            break;
    case 'delete-reservation':
        $res->delete();
            break;
    
    default:
        # code...
        break;
}