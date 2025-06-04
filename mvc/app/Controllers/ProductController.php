<?php 
namespace App\Controllers;
use App\Models\Product;
class ProductController extends Controller{
    // Phương thức => xử lý dữ liệu và trả ra view 
    // Hiển thị danh sách sản phẩm
    public function index(){
        $title = "Danh sách sản phẩm";
        $modelPro = new Product();
        // var_dump($modelPro->getAllProduct());
        $products = $modelPro->getAllProduct();
        // echo "Trang danh sách";
        return $this->views('product.list', 
        compact('products', 'title'));
    }
}
?>