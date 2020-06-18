<?php 
require_once('../../config/autoload.php');

$admin = new \App\Controllers\ManagersAdmin;

// switch to correct page 
switch ($route->prepareURL()[1]) {
    case 'managers':
        $admin->home();
            break;

    case 'add-manager':
        $admin->add();
            break;

    case 'store-manager':
        $admin->store();
            break;
    case 'delete-manager':
        $admin->delete();
            break;

    case 'edit-manager':
        $admin->edit();
            break;

    case 'update-manager':
        $admin->update();
            break;
    
    default:
        # code...
        break;
}