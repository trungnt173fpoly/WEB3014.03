<?php 
// OOP: có 4 tính chất 
// Đóng gói
// Kế thừa
// Đa hình 
// Trừu tượng
// 1: Đóng gói
// Tính đóng gói: "Đóng gói" thuộc tính và phương thức của lớp
// (đôi tượng) thông qua việc giới hạn quyền truy cập (thay đổi giá trị của
// thuộc tính hoặc quyền gọi phương thức)
// private: chỉ có thể truy cập trong class
// protected: chỉ có thể truy cập trong class hoặc các class con
// public: ở đâu cũng truy cập được
// Ví dụ:
// class SinhVien{
//     // Thuộc tính 
//     private $hoTen;
//     private $namSinh;
//     private $maSinhVien;
//     protected $soDienThoai;
//     public $gioiTinh;
//     // Phương thức
//     // Get and set
//     // Cách 1: Dùng hàm __set và __get
//     public function __set($key, $value){
//         $this->$key = $value;
//     }
//     public function __get($key){
//         return $this->$key;
//     }
//     //  Cách 2: Tự viết get và set
//     public function setHoTen($hoTen){
//         $this->hoTen = $hoTen;
//     }
//     public function getHoTen(){
//         return $this->hoTen;
//     }
//     public function di(){
//         echo "Đi thật xa";
//     }
//     private function tinhTuoi(){
//         return date('Y') - $this->namSinh;
//     }
//     protected function hienThiTT(){
//         echo $this->hoTen;
//         echo $this->tinhTuoi();
//     }
// }
// // Khởi tạo đối tượng
// $sv = new SinhVien();
// // Dùng __get và __ set
// // __set
// $sv->hoTen = "Nguyễn Văn A"; // public
// // $sv->namSinh = 2000; // private
// $sv->maSinhVien = "PH123456"; // protected
// // __get
// echo $sv->maSinhVien ;
// // Dung get và set 
// $sv->setHoTen("Nguyễn Văn B");
// echo $sv->getHoTen();
// 2: Kế Thừa
// Kế thừa là cho phép một class (lớp) có thể kế thừa thuộc 
// và phương thức của 1 lớp khác đã định nghĩa. lớp được kế 
// thừa là lớp cha và lớp kế thừa là lớp con4
// Lớp cha
class ConNguoi{
    public $hoTen;
    protected $namSinh;
    private $gioiTinh;
}
// Lớp con
class SinhVien extends ConNguoi{
    public $maSinhVien;
    public function hienThi(){
        echo $this->hoTen;
        echo $this->namSinh;
        // echo $this->gioiTinh; // Báo lỗi không quyền kt
    }
}
// 3: Trừu tượng
// Tính trừu tượng (abstraction) trong lthdt giúp giảm sự
// phưc tạp thông qua việc tập trung vào các đặc điểm trọng
// yếu hơn là đi sâu vào chi tiết
// => Chỉ tương tác và quan tâm tới thuộc tính, phương thức 
// cần thiết
// 4: Đa hình
// Tính đa hình trong lthdt cho phép các lớp con có thể viết
// lại(override) thuộc tính hoặc phương thức của lớp cha
// Khi nào thì dùng đa hình và khi nào dùng trừu tượng
// đa hình: chúng là các class chung bản chất ( có thể hiểu
// là một lớp cha cho tất  các class có  cùng bản chất. 
// bản chất ở đây kiểu, loại, ... )
// Trừu tượng: có thể hoàn hoàn khác nhau về bản chất 
// nhưng chỉ cần giống về một tính cách (chức năng)
// Trait 
// Đối với với php hướng đối tưởng chỉ cho phép đơn kế thừa
// nghĩa là 1 class chỉ có thể kế thừa từ 1 class cha
// Nhưng đôi khi chúng ta cần kế thừa từ nhiều class khác nhau
// Để giải quyết vấn đề này, php đã cung cấp cho chúng ta
// một tính năng gọi là trait
// Trait là một tập hợp các phương thức mà có thể được sử dụng
// trong nhiều class khác nhau mà không cần phải kế thừa
trait tinhTong{
    public function tinhTong($a, $b){
        return $a + $b;
    }
}
trait tinhHieu{
    public function tinhHieu($a, $b){
        return $a - $b;
    }
}
class ToanHoc{
    use tinhHieu, tinhTong;
    public function tinhToan(){
        return $this->tinhTong(2,3);
    }
}
// Namespace
?>