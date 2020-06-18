<?php 

define("DS",DIRECTORY_SEPARATOR);
// define root patt 
define("ROOT_PATH",dirname(__DIR__).DS);
// define url path 
define("URL","http://courses.local/");
// define url path for admin
define("AURL","http://courses.local/admin/");

// define folders pathes 

// app folder
define("APP",ROOT_PATH.'app'.DS);

// config folder
define("CONFIG",ROOT_PATH.'config'.DS);

// core folder
define("CORE",ROOT_PATH.'core'.DS);

// controller folder
define("CONTROLLERS",APP.'controllers'.DS);

// helpers folder
define("HELPERS",APP.'helpers'.DS);

// libs folder
define("LIBS",APP.'libs'.DS);

// models folder
define("MODELS",APP.'models'.DS);

// views folder
define("VIEWS",APP.'views'.DS);

// public folder
define("PUBLIC_PATH",ROOT_PATH.'public'.DS);
// Uploads folder
define("UPLOADS", PUBLIC_PATH . 'uploads'.DS);








/**
 * 
 * database configuration
 * 
 */



define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB_NAME","php_courses");