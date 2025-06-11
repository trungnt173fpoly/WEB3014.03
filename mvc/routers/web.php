<?php 
use Bramus\Router\Router;
use App\Controllers\ProductController;
$router = new Router();
// tạm thời viết và xử lý cho 2 phương thức 
// Get -> Hiển thị (danh, form)
// Post -> Xử lý thêm sửa xóa
// get
$router->get('/danh-bai', function(){
    echo "23456JQKA";
});
//Cấu trúc
// $router->phương_thức->('/đường dẫn', Tên_class::class.'@tên_phương thức');
// phương_thức: get/post/...
// Lưu ý nhớ use class cần dùng
$router->get('/product', ProductController::class.'@index');
// Thêm
// Hiển thị form 
$router->get('/product/add', ProductController::class.'@create');
// Xử lý 
$router->post('/product/add', ProductController::class.'@store');
$router->run();
?>