<?php 
$servername = "localhost:3306";
$username_db ="root";
$password_db ="";
$database ="db_sekolah";

$nama_pengguna = $_POST[ 'nama_pengguna' ];
$email = $_POST['email'];
$password = $_POST['password'];
$Nomor_HP = $_POST[ 'Nomor_HP' ];
$alamat = $_POST[ 'alamat' ];
$username = $_POST['username'];

$conn = new mysqli($servername, $username_db, $password_db, $database);

if ($conn->connect_error) {
    die("koneksi database gagal; " .$conn->connect_error);}
    else{
       $stmt =$conn->prepare("insert into admin(nama_pengguna, email, password, Nomor_HP, alamat, username) values(?,?,?,?,?,?)");
       if (!$stmt) {
        echo "false";
    }else{
        $stmt->bind_param("ssssss", $nama_pengguna, $email, md5($password), $Nomor_HP, $alamat, $username);
        $stmt->execute();
      header('location:login.php');
        $stmt->close();
        $conn->close();
    }
    }
?>