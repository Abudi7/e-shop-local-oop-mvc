<?php 

class Products {
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }

  public function addProducts()
  {
    
  }

  public function Products()
  {
    $this->db->query('SELECT * FROM products');
  }
}