<?php 
class CustomersController extends Controller {
  private $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('Customers');
  }
  public function index()
  {
    
  }
  public function register()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $firstName = $_POST['firstname'];
      $lastName = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger' role='alert'>Invalid email address.</div>";
        return;
      }
      
      

      // Check if email is already taken
      // if ($this->model('Customers')->emailExists($email)) {
      //   echo "<div class='alert alert-danger' role='alert'>Email address already exists.</div>";
      //   return;
      // }
     
      // Check password length
      if (strlen($password) < 8) {
        echo "<div class='alert alert-danger' role='alert'>Password must be at least 8 characters long.</div>";
        return;
      }
      
      //Regex password 
      $regexPassword = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

      // Check the password matches regex
      if (!preg_match($regexPassword, $password)) {
        echo "<div class='alert alert-danger' role='alert'>Password must contain at least one uppercase letter, one lowercase letter, one digit, and one symbol.</div>";
        return;
      }
      
      // Hash password 
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      // Proceed with registering the user with the validated data
      $this->model('Customers')->register($firstName, $lastName, $email, $hashedPassword);

      // Display success message using Bootstrap alert
      echo "<div class='alert alert-success' role='alert'>Registration successful. You can now <a href='login.php'>login</a>.</div>";

      // Redirect after successful registration
       redirect('CustomersController/login'); 
     
    }
    $this->view('customers/register');
  }

  public function login()
  {
    
    $this->view('customers/login');
  }

}