<?php 
// config file 
require_once('config.php');
require_once(HELPERS.'helpers.php');


$paths = [ROOT_PATH,APP,CONFIG,CORE,CONTROLLERS,HELPERS,LIBS,MODELS,VIEWS];

set_include_path(get_include_path(). PATH_SEPARATOR . implode(PATH_SEPARATOR,$paths));
spl_autoload_register('spl_autoload',false);


$route = new \Core\Router;