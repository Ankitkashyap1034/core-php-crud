<?php
require_once '../conn.php';

class Crud
{
      public $conn;
      public $table;
      public $coloumn;
      public $values;
      public $uniqeColoumn;
      public $identifire;

      public function __construct()
      {
            global $conn;
            $this->conn = $conn;
      }

      // create method
      public function create($table, $data)
      {
            $columns = implode(', ', array_keys($data));
            $values = "'" . implode("', '", array_values($data)) . "'";
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            $queryExt = mysqli_query($this->conn, $sql);

            if ($queryExt) {
                  return [
                        'status' => 'success',
                        'message' => 'Data update successfully',
                  ];
                  $this->conn->close();
            } else {
                  return [
                        'status' => 'error',
                        'message' => mysqli_error($this->conn),
                  ];
            }
      }

      // update method
      public function update($table, $data, $uniqueColumn, $identifier)
      {
            $setStatements = array();
            foreach ($data as $column => $value) {
                  $setStatements[] = "$column = '$value'";
            }

            $setClause = implode(', ', $setStatements);

            $sql = "UPDATE $table SET $setClause WHERE $uniqueColumn = '$identifier'";
            $queryExt = mysqli_query($this->conn, $sql);

            if ($queryExt) {
                  return [
                        'status' => 'success',
                        'message' => 'Data update successfully',
                  ];
                  $this->conn->close();
            } else {
                  return [
                        'status' => 'error',
                        'message' => mysqli_error($this->conn),
                  ];
            }
      }

      public function delete($table, $id)
      {
            $sql = "DELETE FROM $table WHERE id=$id";
            $queryExt = mysqli_query($this->conn, $sql);
            if ($queryExt) {
                  return [
                        'status' => 'success',
                        'message' => 'Data delete successfully',
                  ];
                  $this->conn->close();
            } else {
                  return [
                        'status' => 'error',
                        'message' => mysqli_error($this->conn),
                  ];
            }
      }
}
