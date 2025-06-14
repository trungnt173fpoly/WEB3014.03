<?php 
// include 'Model.php';
namespace App\Models;
use App\Models\Model;
class Product extends Model{
    protected $table = 'products';

    // lấy tất cả bản ghi trong Product
    public function getAllProduct(){
        $sql = "SELECT * FROM {$this->table}";
        $this->setSql($sql);
        return $this->all();
    }
    // Lấy 1 bản ghi => id
    public function getIDProduct($id){
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $this->setSql($sql);
        return $this->first([$id]);
    }
    // Làm thêm sửa xóa
    public function addProduct($id, $name, $price, $image, $quantity, $status){
         $sql = "INSERT INTO {$this->table}(`id`, `name`, `price`, `image`, `quantity`, `status`)
         VALUES (?,?,?,?,?,?)";
        $this->setSql($sql);
        return $this->execute([$id, $name, $price, $image, $quantity, $status]);
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $this->setSql($sql);
        return $this->execute([$id]);
    }
    public function updateProduct($name, $price, $image, $quantity, $status, $id){
            $sql = "UPDATE {$this->table} SET `name`= ?,
            `price`= ?,`image`= ?,`quantity`= ?,
            `status`= ? WHERE `id`= ?";
        $this->setSql($sql);
        return $this->execute([$name, $price, $image, $quantity, $status, $id]);
    }
}
?>
