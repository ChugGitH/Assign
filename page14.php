<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_personal_contacts";

try {
    // Kết nối đến cơ sở dữ liệu
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công!<br>";

    // Thêm dữ liệu
    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country)
            VALUES ('Poseidon', 'Male', '333', 'poseidon@ocean.oc', 'Atlantis', 'Ocean')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Dữ liệu đã được thêm thành công!<br>";

    // Cập nhật dữ liệu
    $sql = "UPDATE my_contacts SET contact_no = '999', email = 'poseidon_updated@ocean.oc' WHERE full_names = 'Poseidon'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Dữ liệu đã được cập nhật thành công!<br>";

    // Xóa dữ liệu
    $sql = "DELETE FROM my_contacts WHERE full_names = 'Poseidon'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Dữ liệu đã được xóa thành công!<br>";

    // Hiển thị dữ liệu còn lại trong bảng
    $sql = "SELECT id, full_names, gender, contact_no, email, city, country FROM my_contacts";
    $stmt = $conn->query($sql);
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "Dữ liệu còn lại trong bảng:<br>";
    foreach ($contacts as $contact) {
        echo "ID: " . $contact['id'] . "<br>";
        echo "Tên đầy đủ: " . $contact['full_names'] . "<br>";
        echo "Giới tính: " . $contact['gender'] . "<br>";
        echo "Số điện thoại: " . $contact['contact_no'] . "<br>";
        echo "Email: " . $contact['email'] . "<br>";
        echo "Thành phố: " . $contact['city'] . "<br>";
        echo "Quốc gia: " . $contact['country'] . "<br><br>";
    }
    
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>
