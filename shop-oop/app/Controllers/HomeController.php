<?php 
class HomeController extends Controller{
  private $postModel;
function __construct() {
  //echo 'HomeController loded';
  
}

public function index() {
  session_start();
  $email = $_SESSION['email'];
  $this->model('Customers')->login($email);
  $this->view('Home/index');
}

 public function about()  {
  
}

}