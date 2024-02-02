<?php

if (isset($_GET['id'])) {
      echo json_encode(['status' => 'success', 'data' => $_GET['id']]);
}
// $a = 'Minus';
// $b = 232;

// switch ($a) {
//       case 'add';
//             echo 'add';
//             break;

//       case 'Minus';
//             echo 'minus';
//             break;
// }
