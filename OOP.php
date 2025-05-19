<?php 
// Khai báo lớp
// class teenLop{ khối lệnh}
class SinhVien{
    // Thuộc tính
    // Phạm_vi_truy_cập $tên_thuộc_tính;
    public $hoTen;
    public $namSinh;
    // Lấy ví dụ về 5 thuộc tính
    // Phương thức
    // Phạm_vi_truy_cập  function tên_phương_thức(){
        // Khối lệnh
    // }
    public function di(){
        echo "Đi học";
    }
    public function an($thucAn){
        return $thucAn;
    }
    // Lấy  ví dụ về 5 phương thức
    // Trong class muốn gọi đến ttinh hay pthuc thì nhớ tới $this->ten_ttinh 
    //  $this->ten_phuong_thuc();
    public function hienThi(){
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Năm sinh: " . $this->namSinh . "<br>";
        $this->di();
    }
}
// Khởi tạo đối tượng
// $ten_bien = new tenLop();
$sv = new SinhVien();
// Gán giá trị cho thuộc tính
// $ten_bien->ten_thuộc_tính = giá_trị;
$sv->hoTen = "Nguyễn A";
$sv->namSinh = 2000;
// Gọi các phương thức
// Nếu trong phương thức có return thì ta có công thức sau
// $ten_chua/echo/Các hàm hiện thị khác = $ten_bien->ten_phương_thức();
// Còn lại thì dùng công thức
// $ten_bien->ten_phương_thức();
$sv->di();
$an = $sv->an("Phở"); // Hàm có bao nhiêu tham số thì truyền bấy nhiêu gtri
// Khai báo class NhanVien 
// Có 10 thuộc tính buộc có nhưng ttinh sau (hoTen, namSinh, diaChi, sdt, email)
// Có 5 pthuc buộc có nhưng pthuc sau (tinhTuoi, hienThi(Lấy toàn toàn bộ ttin))
?>