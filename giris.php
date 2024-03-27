<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "efekan"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}


$loginUsername = $_POST['loginUsername'];
$loginPassword = $_POST['loginPassword'];


$sql = "SELECT * FROM users WHERE username='$loginUsername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    if (password_verify($loginPassword, $row['password'])) {
    
        session_start();
        $_SESSION['username'] = $loginUsername;
        header("Location: index.php");
        exit;
    } else {

        echo "Hatalı şifre. Lütfen tekrar deneyin.";
    }
} else {
 
    echo "Kullanıcı adı bulunamadı.";
}

$conn->close();
?>
