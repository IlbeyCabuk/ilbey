<?php
$servername = "localhost";
$username = "root";
$password = "10861086";
$dbname = "Bey_Han_jsProje";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
?>
