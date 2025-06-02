<?php 
// include_once 'app/Models/Model.php'; // Đường dẫn đến file Model.php
// Khởi tạo đối tượng model
// $model = new Model();
// Kết nối đến csdl
// $connection = $model->getConnection();
// Hiển thị thông tin kết nối
// var_dump($connection);
// Test model
// include 'app/Models/Product.php';

use Dotenv\Dotenv;

include_once 'vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
include_once 'routers/web.php';
// var_dump(__DIR__);
// use App\Models\Product;
// $pro = new Product();
// var_dump($pro->getAllProduct());
// var_dump($model->setSql("SELECT * FROM $this->table"));
// var_dump($pro->getIDProduct(1));

// RewriteEngine On
// RewriteCond %{REQUEST_FILENAME} !-f
// RewriteCond %{REQUEST_FILENAME} !-d
// RewriteRule ^ index.php [QSA,L]
?>