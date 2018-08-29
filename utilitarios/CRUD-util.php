<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

class Util extends Connection {
  public $connection;

  public function __construct() {
    parent::__construct();
  }

  public function Create($table, $columns, $values) {
    $this->connection;
    
    $valuesMapped = array_map(function($value) {
      if (is_string($value)) {
        return "'" . $value . "'";
      } else {
        return $value;
      }
    }, $values);

    $comm = $this->connection->prepare("INSERT INTO $table(" . implode(", ", $columns) . ") VALUES(" . implode(", ", $valuesMapped) . ")");
    var_dump($comm);
    $comm->execute();
  }
  
  public function Read($table, $columns = [], $whereColumns = [], $whereValues = []) {
    $this->connection;
  
    $whereValuesMapped = array_map(function($value) {
      if (is_string($value)) {
        return "'" . $value . "'";
      } else {
        return $value;
      }
    }, $whereValues);
    
    $comm = $this->connection->prepare("SELECT " .
            (!empty($columns) ? implode(", ",$columns) : "*")
            . " FROM $table" .
    (!empty($whereColumns) && !empty($whereValues) ? " WHERE " .
    urldecode(http_build_query(array_combine($whereColumns, $whereValuesMapped), '', ' AND ')) : ""));
    $comm->execute();
  
    while ($row = $comm->fetch(PDO::FETCH_ASSOC)) {
      $getRow[] = $row;
    }
  
    return $getRow;
  }
  
  public function Update($table, $columns, $values, $whereColumns = [], $whereValues = []) {
    $this->connection;
  
    $valuesMapped = array_map(function($value) {
      if (is_string($value)) {
        return "'" . $value . "'";
      } else {
        return $value;
      }
    }, $values);
  
    $whereValuesMapped = array_map(function($value) {
      if (is_string($value)) {
        return "'" . $value . "'";
      } else {
        return $value;
      }
    }, $whereValues);
  
    $comm = $this->connection->prepare("UPDATE $table SET " . 
      urldecode(http_build_query(array_combine($columns, $valuesMapped), '', ', ')) . 
      (!empty($whereColumns) && !empty($whereValues) ? " WHERE " . 
      urldecode(http_build_query(array_combine($whereColumns, $whereValuesMapped), '', ', ')) : ""));
    $comm->execute();
  }
  
  public function Delete($table, $whereColumns, $whereValues) {
    $this->connection;
  
    $whereValuesMapped = array_map(function($value) {
      if (is_string($value)) {
        return "'" . $value . "'";
      } else {
        return $value;
      }
    }, $whereValues);
  
    $comm = $this->connection->prepare("DELETE FROM $table" .
      (!empty($whereColumns) && !empty($whereValues) ? " WHERE " .
      urldecode(http_build_query(array_combine($whereColumns, $whereValuesMapped), '', ', ')): ""));
    $comm->execute();
  }
}
?>