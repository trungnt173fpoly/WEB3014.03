<?php
// Namspace luôn được tạo đầu tiên trong file
use test1\SinhVien;
use test\SinhVien as SV;
include 'ns1.php';
include 'ns2.php';
$sv = new SV();
// ASM 1:
// Xây dựng giao diện 
// MVC -> DA1
// 3 cái (1 trang chủ, 2 trang sản phẩm admin, 3 danh mục admin)
?>