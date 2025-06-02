<?php 
use Bramus\Router\Router;
$router = new Router();
// tạm thời viết và xử lý cho 2 phương thức 
// Get -> Hiển thị (danh, form)
// Post -> Xử lý thêm sửa xóa
// get
$router->get('/danh-bai', function(){
    echo "23456JQKA";
});
$router->run();
?>