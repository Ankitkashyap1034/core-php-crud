<?php
require_once '../functions/Crud.php';


if (isset($_POST['create'])) {
      $crud = new Crud();
      $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
      );

      $createResponse = $crud->create('users', $data);
      if ($createResponse['status'] === 'success') {
            header("location:../../template/user-create.php");
            exit;
      }
}

if (isset($_POST['update'])) {
      $crud = new Crud();
      $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
      );

      $updateResponse = $crud->update('users', $data, 'id', $_POST['id']);
      if ($updateResponse['status'] === 'success') {
            header("location:../../index.php");
            exit;
      }
}

if (isset($_GET['id'])) {
      $crud = new Crud();
      $deleteResponse = $crud->delete('users', $_GET['id']);
      if ($deleteResponse['status'] === 'success') {
            header("location:../../index.php");
            exit;
      }
}

if (isset($_GET['get'])) {
      echo json_encode(['status' => 'success', 'data' => 'This is a get request response']);
}
