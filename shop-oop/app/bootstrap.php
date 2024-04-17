<?php 
//load Config
require_once('../app/Config/config.php');
// Load Libiraries 
// require_once('Libraries/Core.php');
// require_once('Libraries/Controller.php');
// require_once('Libraries/Database.php');


// Autoload Core Libraries
spl_autoload_register(function($className){
  require_once('Libraries/'.$className.'.php');
});