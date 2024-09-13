<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "my_personal_contacts"; 

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối thành công!<br>";
}

// Thêm dữ liệu
$sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
        VALUES ('Poseidon', 'Male', '333', 'poseidon@ocean.oc', 'Atlantis', 'Ocean')";

if ($conn->query($sql) === TRUE) {
    echo "Poseidon đã được thêm vào danh bạ của bạn<br>";
} else {
    echo "Lỗi thêm dữ liệu: " . $sql . "<br>" . $conn->error . "<br>";
}

// Cập nhật dữ liệu
$sql = "UPDATE my_contacts SET contact_no = '785', email = 'poseidon@ocean.oc' WHERE id = 5";

if ($conn->query($sql) === TRUE) {
    echo "ID số 5 đã được cập nhật thành công<br>";
} else {
    echo "Lỗi cập nhật dữ liệu: " . $sql . "<br>" . $conn->error . "<br>";
}

// Xóa dữ liệu
$id = 4; // ID của Venus
$sql = "DELETE FROM my_contacts WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "ID số $id đã được xóa thành công<br>";
} else {
    echo "Lỗi xóa dữ liệu: " . $sql . "<br>" . $conn->error . "<br>";
}

// Hiển thị dữ liệu
$sql = "SELECT * FROM my_contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Tên đầy đủ: " . $row["full_names"] . " - Giới tính: " . $row["gender"] . 
             " - Số điện thoại: " . $row["contact_no"] . " - Email: " . $row["email"] . 
             " - Thành phố: " . $row["city"] . " - Quốc gia: " . $row["country"] . "<br>";
    }
} else {
    echo "Không có kết quả<br>";
}

// Đóng kết nối
$conn->close();
?>
