<?php 

/**
 * Base Controller
 * Loads The Models and Views
 */

 class Controller {
  public function model($model) {
    // Require model file 
    require_once('../app/Models/'.$model.'.php');
    
    // Instatiate model 
    return new $model();
  }

  // Load View 
  public function view($view, $dataBase = []) {
    // Check for view file 
    $viewFile = '../app/Views/' . $view . '.php';
    if (file_exists($viewFile)) {
        // Require view file 
        require_once $viewFile;
    } else {
        // View does not exist
        die('View does not exist');
    }
  }


 }