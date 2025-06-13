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
    // Thêm và Sửa
    // Hiển thị form thêm
    public function create(){
        $title = "Thêm mới sản phẩm";
        return $this->views('product.add', compact('title'));
    }
    // Xử lý thêm
    public function store(){
        // var_dump($_POST);
        // var_dump($_FILES);
        // die;
        // Validate
        $errors = [];
        if($_POST['name'] == ""){
            $errors[] = "Bạn cần thêm tên sản phẩm";
        }
        // Tương tự với giá, số lượng và trạng thái
        if($_FILES["image"]['error'] != 0 || $_FILES["image"]['size'] == 0){
            $errors[] = "Bạn cần tải ảnh lên hoăc quá trình tải ảnh lên bị lỗi";
        }
        if(count($errors) > 0){
            flash('errors', $errors, 'product/add');
        }else{
            // upload ảnh
            $targetDir = __DIR__.'/../../storage/uploads/';
            $newFileName = time()."_".$_FILES["image"]["name"];
            // var_dump($newFileName);
            // die;
            move_uploaded_file($_FILES["image"]["tmp_name"],  $targetDir.$newFileName);
            if(!file_exists($targetDir.$newFileName)){
                $errors[] = "Lỗi upload ảnh";
                flash('errors', $errors, 'product/add');
            }else{
                $modePro = new Product();
                if($modePro->addProduct(null, 
                $_POST['name'], 
                $_POST['price'],
                $newFileName,
                $_POST['quantity'],
                $_POST['status'])){
                    flash('success', "Thêm thành công", 'product/add');
                }
            }
        }
    }
    // Chỉnh sửa
     public function edit($id){
        $title = "Chỉnh sửa sản phẩm";
        $modePro = new Product();
        $product = $modePro->getIDProduct($id);
        return $this->views('product.edit', compact('title',
        'product'));
    }
    // Xử lý thêm
    public function update($id){
        // var_dump($_POST);
        // var_dump($_FILES);
        // die;
        // Validate
        $modePro = new Product();
        $product = $modePro->getIDProduct($id);
        $errors = [];
        if($_POST['name'] == ""){
            $errors[] = "Bạn cần thêm tên sản phẩm";
        }
        // Tương tự với giá, số lượng và trạng thái
        if($_FILES["image"]['error'] != 0 || $_FILES["image"]['size'] == 0){
            $newFileName = $product->image;
        }else{
            // upload ảnh
            $targetDir = __DIR__.'/../../storage/uploads/';
            $newFileName = time()."_".$_FILES["image"]["name"];
            // var_dump($newFileName);
            // die;
            move_uploaded_file($_FILES["image"]["tmp_name"],  $targetDir.$newFileName);
            if(!file_exists($targetDir.$newFileName)){
                $errors[] = "Lỗi upload ảnh";
                flash('errors', $errors, 'product/edit/'.$id);
            }
        }
        if(count($errors) > 0){
            flash('errors', $errors, 'product/edit/'.$id);
        }else{
                $modePro = new Product();
                if($modePro->updateProduct(
                $_POST['name'], 
                $_POST['price'],
                $newFileName,
                $_POST['quantity'],
                $_POST['status'],
                $id)){
                    flash('success', "Thêm thành công", 'product/edit/'.$id);
                }
            }
    }
    // Xóa
    public function delete($id){
        // Xóa luôn
        $modePro = new Product();
        if($modePro->deleteProduct($id)){
            flash('success', "Xóa thành công", 'product');
        }
    }
}
?>