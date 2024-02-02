<?php
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
      case 'GET':
            $params = $_GET;
            if (isset($params)) {
                  if (isset($params['id'])) {
                        $id = $params['id'];
                        header("Location: ../includes/controllers/TestController.php?id=" . urlencode($id));
                        exit();
                        break;
                  } else {
                        echo json_encode(['status' => 'faild', 'message' => 'The id not found']);
                        break;
                  }
            }
            break;

      case 'POST':
            $postData = $_POST;
            if (isset($postData)) {
                  $create = 'create';
                  echo json_encode([
                        'status' => 'success',
                        'message' => 'The id not found',
                        'data' => $postData,
                  ]);
            }
            break;
}
