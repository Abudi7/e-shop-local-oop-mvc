<?php 

/**
 * Customers Class 
 * Register Customers
 * Login Customers
 * Logout Customers
 * Edit Customers
 */

class Customers {
  private $db;
  public function __construct()  {
    $this->db = new Database;
  }

  /**
   * Registers a new customer in the database.
   *
   * @param string $firstname The first name of the customer.
   * @param string $lastname The last name of the customer.
   * @param string $email The email address of the customer.
   * @param string $password The password of the customer.
   * @param string $role The role of the customer.
   * @return void
   */
  public function register($firstname, $lastname, $email, $password)
  {
   
      // Prepare the SQL query
      $this->db->query('INSERT INTO customers (firstname, lastname, email, password, role,created) VALUES (?, ?, ?, ?, ?, ?)');
      
      // Bind parameters to the query
      $this->db->bindParam(1, $firstname);
      $this->db->bindParam(2, $lastname);
      $this->db->bindParam(3, $email);
      $this->db->bindParam(4, $password);
      $this->db->bindParam(5, 'customer');
      
      $this->db->bindParam(6, (new DateTime())->format('y-m-d h:i:s'));
      
      // Execute the query
      $this->db->execute();
  }
 
  // ask about if email Exists
  public function emailExists($email)
  {
    // Assuming you're using PDO for database operations
    $query = "SELECT * FROM customers WHERE email = :email";
    $this->db->query($query);
    $this->db->bindParam(':email', $email);
    $this->db->execute();
    $result = $this->db->fetchSingle();

    // If count is greater than 0, email exists
    if ($this->db->countRow() > 0) {
      return true;
    }else {
      return false;
    }
  }

  /**
   * This method retrieves customer data based on email for login purposes.
   *
   * @param string $email The email of the customer.
   * @return array|bool Returns customer data if found, otherwise returns false.
   */

   public function login ($email)
   {
    $this->db->query("SELECT * FROM customers WHERE email = :email");
    $this->db->bindParam(':email', $email);
    $this->db->execute();
    return $result = $this->db->fetchSingle();
   }

}