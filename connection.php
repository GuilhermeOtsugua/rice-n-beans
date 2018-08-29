<?php
  class Connection {
    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_NAME = 'pdsi';
    const DB_USERNAME = 'root';
    public $connection;
  
    public function __construct() {
      try {
        $this->connection = new PDO(self::DB_DRIVER . ':host=' . self::DB_HOST . ';dbname='. self::DB_NAME, self::DB_USERNAME);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die();
      }
    }
  } 
  
?>