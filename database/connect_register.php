<?php 
$servername = "localhost:3306";
$username_db ="root";
$password_db ="";
$databasae ="db_sekolah";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $databasae);

if ($conn->connect_error) {
    die("koneksi database gagal; " .$conn->connect_error);}
    else{
       $stmt =$conn->prepare("insert into admin(email, username, password) values (?,?,?)");
       $stmt->bind_param("sss", $email, $username, $password);
       $stmt->execute();
       echo "registrasi berhasil";
       $stmt->close();
       $conn->close();
    }
?>