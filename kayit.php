<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "efekan"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla oluşturuldu. Yönlendiriliyorsunuz...";
    sleep(3);
    header("Location: girisyapp.php");
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
