<?php 
class HomeController extends Controller{
function __construct() {
  //echo 'HomeController loded';
}

public function index() {
  $this->view('Home/index');
}

 public function about()  {
  
}

}