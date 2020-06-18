<?php 
require_once('../../config/autoload.php');

$cat = new \App\Controllers\CoursesAdmin;

// switch to correct page 
switch ($route->prepareURL()[1]) {
    case 'courses':
        $cat->home();
            break;

    case 'add-course':
        $cat->add();
            break;

    case 'store-course':
        $cat->store();
            break;
    case 'delete-course':
        $cat->delete();
            break;

    case 'edit-course':
        $cat->edit();
            break;

    case 'update-course':
        $cat->update();
            break;
    
    default:
        # code...
        break;
}