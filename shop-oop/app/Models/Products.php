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

  public function getProducts()
  {
      $this->db->query('SELECT * FROM products');
      $results = $this->db->fetchAll();
      return $results;
  }
}