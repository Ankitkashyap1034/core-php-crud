<?php
// require './includes/conn.php';
require '../conn.php';
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
      $sql = "SELECT * FROM users";
      $queryExc = mysqli_query($conn, $sql);
      $data = [];
      while ($row = mysqli_fetch_assoc($queryExc)) {
            $data[] = $row;
      }

      echo json_encode(['status' => 'success', 'data' => $data]);
}
