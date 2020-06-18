<?php 
require_once('../config/autoload.php');


$order = new \App\Controllers\Order;


switch ($route->prepareURL()[0]) 
{
    case 'order':
        $order->order();
        break;

    case 'add-order':
        $order->addOrder();
        break;
}