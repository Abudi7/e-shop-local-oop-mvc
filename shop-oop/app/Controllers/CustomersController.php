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
      if ($this->model('Customers')->emailExists($email)) {
        echo "<div class='alert alert-danger' role='alert'>Email address already exists.</div>";
        return;
      }
     
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

  /**
   * This method handles the login functionality for customers.
   */
  public function login()
  {
    session_start();
      // Initialize logged-in user data
      $loggedInUserData = null;

      // Check if form is submitted
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
          // Get email and password from form
          $email = $_POST['email'];
          $password = $_POST['password'];

          // Call the login method from the Customers model to retrieve user data
          $loggedInUserData = $this->model('Customers')->login($email);

          // Check if user exists and login is successful
          if ($loggedInUserData) {
            $_SESSION['name'] = $loggedInUserData->firstname;
            $_SESSION['userId'] = $loggedInUserData->id;
            $_SESSION['role'] = $loggedInUserData->role;
              // Redirect user after successful login attempt
              redirect('HomeController');
          }
      }

      // Pass logged-in user data to the view
      $this->view('customers/login', ['loggedInUserData' => $loggedInUserData]);
  }
   

  /**
   * This method handles the logout functionality for customers.
   */
  public function logout()
  {
      session_start();
      session_destroy();

      // Redirect user to the login page after logout
      redirect('CustomersController/login');
  }

  /**
   * Retrieve the user's name from the session.
   */
  public function getUserName() {
    if (isset($_SESSION['name'])) {
        return $_SESSION['name'];
    }
    return null;
  }

}