<!-- /* 1. Đếm số ký tự trong một chuỗi sử dụng hàm strlen() */ -->
<?php
$chuoi = "Xin chào, thế giới!";
$soKyTu = strlen($chuoi);
echo "Số ký tự trong chuỗi là: " . $soKyTu;
?>

<!-- // 2. Đếm số từ trong một chuỗi sử dụng hàm str_word_count() //  -->
<?php
$chuoi = "Xin chào, thế giới!";
$soTu = str_word_count($chuoi);
echo "Số từ trong chuỗi là: " . $soTu;
?>

<!-- 3. Đảo ngược một chuỗi sử dụng hàm strrev() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiDaoNguoc = strrev($chuoi);
echo "Chuỗi sau khi đảo ngược: " . $chuoiDaoNguoc;
?>

<!-- 4. Tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiCon = "thế";
$viTri = strpos($chuoi, $chuoiCon);

if ($viTri !== false) {
    echo "Chuỗi con '$chuoiCon' được tìm thấy tại vị trí: " . $viTri;
} else {
    echo "Chuỗi con '$chuoiCon' không được tìm thấy.";
}
?>

<!-- 5. Thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiThayThe = str_replace("thế giới", "bạn", $chuoi);
echo "Chuỗi sau khi thay thế: " . $chuoiThayThe;
?>

<!-- 6. Kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiCon = "Xin chào";
$ketQua = strncmp($chuoi, $chuoiCon, strlen($chuoiCon)) === 0;

if ($ketQua) {
    echo "Chuỗi bắt đầu bằng '$chuoiCon'.";
} else {
    echo "Chuỗi không bắt đầu bằng '$chuoiCon'.";
}
?>

<!-- 7. Chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiChuHoa = strtoupper($chuoi);
echo "Chuỗi sau khi chuyển thành chữ hoa: " . $chuoiChuHoa;
?>

<!-- 8. Chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower() -->
<?php
$chuoi = "XIN CHÀO, THẾ GIỚI!";
$chuoiChuThuong = strtolower($chuoi);
echo "Chuỗi sau khi chuyển thành chữ thường: " . $chuoiChuThuong;
?>

<!-- 9. Chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords() -->
<?php
$chuoi = "xin chào, thế giới!";
$chuoiInHoa = ucwords($chuoi);
echo "Chuỗi sau khi in hoa chữ cái đầu mỗi từ: " . $chuoiInHoa;
?>

<!-- 10. Loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim() -->
<?php
$chuoi = "   Xin chào, thế giới!   ";
$chuoiTrim = trim($chuoi);
echo "Chuỗi sau khi loại bỏ khoảng trắng: '" . $chuoiTrim . "'";
?>

<!-- 11. Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiLTrim = ltrim($chuoi, "X");
echo "Chuỗi sau khi loại bỏ ký tự đầu tiên: '" . $chuoiLTrim . "'";
?>

<!-- 12. Loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiRTrim = rtrim($chuoi, "!");
echo "Chuỗi sau khi loại bỏ ký tự cuối cùng: '" . $chuoiRTrim . "'";
?>

<!-- 13. Tách một chuỗi thành một mảng các phần tử sử dụng hàm explode() -->
<?php
$chuoi = "Xin,chào,thế,giới";
$mang = explode(",", $chuoi);
print_r($mang);
?>

<!-- 14. Nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode() -->
<?php
$mang = ["Xin", "chào", "thế", "giới"];
$chuoi = implode(" ", $mang);
echo "Chuỗi sau khi nối các phần tử: " . $chuoi;
?>

<!-- 15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad() -->
<?php
$chuoi_goc = "Hello";
$chuoi_muon_them = "123";
$chuoi_ket_qua_dau = str_pad($chuoi_goc, strlen($chuoi_goc) + strlen($chuoi_muon_them), $chuoi_muon_them, STR_PAD_LEFT);
echo "Chuỗi sau khi thêm vào đầu: " . $chuoi_ket_qua_dau;
?>

<!-- 16. Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiCon = "giới!";
$ketThuc = strrchr($chuoi, $chuoiCon) === $chuoiCon;

if ($ketThuc) {
    echo "Chuỗi kết thúc bằng '$chuoiCon'.";
} else {
    echo "Chuỗi không kết thúc bằng '$chuoiCon'.";
}
?>

<!-- 17. Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr() -->
<?php
$chuoi = "Xin chào, thế giới!";
$chuoiCon = "thế";
$chuoiTimThay = strstr($chuoi, $chuoiCon);

if ($chuoiTimThay !== false) {
    echo "Chuỗi chứa chuỗi con '$chuoiCon'.";
} else {
    echo "Chuỗi không chứa chuỗi con '$chuoiCon'.";
}
?>

<!-- 18. Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace() -->
<?php
$chuoi = "Xin chào, thế giới! 123";
$chuoiThayThe = preg_replace("/[^a-zA-Z0-9]/", "-", $chuoi);
echo "Chuỗi sau khi thay thế: " . $chuoiThayThe;
?>

<!-- 19. Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int() -->
<?php
$chuoi = "12345";
$so = intval($chuoi);

if (is_int($so)) {
    echo "'$chuoi' là một số nguyên.";
} else {
    echo "'$chuoi' không phải là một số nguyên.";
}
?>

<!-- 20. Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var() -->
<?php
$email = "example@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "'$email' là một địa chỉ email hợp lệ.";
} else {
    echo "'$email' không phải là một địa chỉ email hợp lệ.";
}
?>




