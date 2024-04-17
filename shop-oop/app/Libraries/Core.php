<?php 

/**
 * App Core Class
 * Create URL & loads core controller 
 * URL FORMAT -/controller/method/params
 */

 class Core{
  protected $currentController = "Pages";
  protected $currentMethod = "index";

  protected $param = [];

  function __construct() {
    // print_r($this->getUrl());

    $url = $this->getUrl();

    // Look in controllers for first Value 
    if (file_exists('../app/Controllers/'.ucwords($url[0]).'.php')) {
      // If exists , set as controller 
      $this->currentController = ucwords($url[0]);
      // Unset 0 index
      unset($url[0]);
    }
    // Requier the controller
    require_once('../app/Controllers/'.$this->currentController.'.php');

    // Instantiate Controller Class
    $this->currentController = new $this->currentController;

    // Check for the secound part ohf url
    if (isset($url[1])) {
      // Check method is exists in the Controller
      if(method_exists($this->currentController,$url[1])) {
        $this->currentMethod = $url[1];
        // unset 1 index
        unset($url[1]);
      }
    }

    // Get Paramter
    $this->param = $url ? array_values($url) : [];

    // Call a callback with array of params
    call_user_func_array([$this->currentController, $this->currentMethod], $this->param);
   



  }
  function getUrl() {

    //echo $_GET['url'];
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'],'/');
      $url = filter_var($url,FILTER_SANITIZE_URL);
      $url = explode('/',$url);
      return $url;
    }
  }
 }