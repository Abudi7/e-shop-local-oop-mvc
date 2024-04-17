<?php 

/**
 * PDO Database Class 
 * Connect to Database 
 * Create Preerd Statment
 * Bind Values
 * Return Row and results
 */

 class Database {
  private $host = DB_HOST;
  private $user = DB_USER;

  private $pass = DB_PASSWORD;

  private $dbName = DB_NAME;
  private $db;
  private $stmt;
  private $error;

  function __construct() {
    //Set DSN 
    $dsn = 'mysql:host' . $this->host.';dbname='.$this->dbName;

    $options = array(PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION
    );
    
    // Create PDO instance 
    try {
      $this->db = new PDO($dsn,$this->user,$this->pass,$options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }
  }
 }