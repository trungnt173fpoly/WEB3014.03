<?php 
// include 'Model.php';
namespace App\Models;
use App\Models\Model;
class Product extends Model{
    protected $table = 'products';
    private $conn;
    public function __construct(){
        $this->conn = new Model();
    }
    // lấy tất cả bản ghi trong Product
    public function getAllProduct(){
        $sql = "SELECT * FROM $this->table";
        $this->conn->setSql( $sql);
        return $this->conn->all();
    }
    // Lấy 1 bản ghi => id
    public function getIDProduct($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->conn->setSql( $sql);
        return $this->conn->first([$id]);
    }
    // Làm thêm sửa xóa
}
?>