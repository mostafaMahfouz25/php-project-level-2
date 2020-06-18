<?php 
require_once('../../config/autoload.php');

$user = new \App\Controllers\Auth;

// switch to correct page 
switch ($route->prepareURL()[1]) {

    case 'login':
        $user->login();
            break;

    case 'do-login':
        $user->doLogin();
            break;
    case 'logout':
        $user->logout();
            break;
    
    default:
        # code...
        break;
}