<?php 
require_once('../../config/autoload.php');

$cat = new \App\Controllers\CategoriesAdmin;

// switch to correct page 
switch ($route->prepareURL()[1]) {
    case 'categories':
        $cat->home();
            break;

    case 'add-category':
        $cat->add();
            break;

    case 'store-category':
        $cat->store();
            break;
    case 'delete-category':
        $cat->delete();
            break;

    case 'edit-category':
        $cat->edit();
            break;

    case 'update-category':
        $cat->update();
            break;
    
    default:
        # code...
        break;
}