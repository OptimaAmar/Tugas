<?php
require_once 'config/database.php';
require_once 'app/conrtollers/UserController.php';

//Koneksi Ke Database
$dbConnection = getDBConnection();

//Mendapatkan Parameter Dari URL (misalnya : index.php?id=1)
$id = isset($_GET['id']) ? intval($_GET['id']) :1;
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//Membuat Instance UserController
$controller = new UserController($dbConnection);

//Menampilkan Data Pengguna Berdasarkan ID
switch ($action) {
    case 'detail':
        $controller->show($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'index':
    default:
        $controller->index();
        break;
}


?>


