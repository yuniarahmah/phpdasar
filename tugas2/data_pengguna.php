<?php
include 'connect2.php';
if ( isset( $_POST[ 'submit' ] ) ) {
    $nama_pengguna = $_POST[ 'nama_pengguna' ];
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    $Nomor_HP = $_POST[ 'Nomor_HP' ];
    $alamat = $_POST[ 'alamat' ];
    $username=$_POST['username'];
    $sql = "insert into admin(nama_pengguna, email, password, Nomor_HP, alamat, username) values('$nama_pengguna', ' $email', '$password', '$Nomor_HP', '$alamat', '$username')";
    $result = mysqli_query( $conn, $sql );
    if ($result){
        header( 'location:read.php' );
    } else {
        die( $conn->connect_error );
    }
}
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Daftar</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin = 'anonymous'>
</head>
<body class = 'min-vh-100 d-flex align-items-center'>
<div class = 'card w-50 m-auto p-3'>
<h3 class = 'text-center' style="background-color:darkgrey">DATA PENGGUNA</h3>
    <form method = 'post'>
        <div class = 'mb-3'>
            <label for = 'nama' class = 'form-label'>nama_pengguna</label>
            <input type = 'text' name = "nama_pengguna" class = 'form-control' id = 'nama_pengguna'>
        </div>
        <div class = 'mb-3'>
            <label for = 'username' class = 'form-label'>username</label>
            <input type = 'text' name = "username" class = 'form-control' id = 'username'>
        </div>
        <div class = 'mb-3'>
            <label for = 'email' class = 'form-label'>email</label>
            <input type = 'text' name="email" class = 'form-control' id = 'email'>
        </div>  
        <div class = 'mb-3'>
            <label for = 'password' class = 'form-label'>password</label>
            <input type = 'text' name="password" class = 'form-control' id = 'password'>
        </div>  
        <div class = 'mb-3'>
            <label for = 'Nomor_HP' class = 'form-label'>Nomor_HP</label>
            <input type = 'text' name="Nomor_HP" class = 'form-control' id = 'Nomor_HP'>
        </div>  
        <div class = 'mb-3'>
            <label for = 'alamat' class = 'form-label'>Alamat</label>
            <input type = 'text' name="alamat" class = 'form-control' id = 'alamat'>
            <button type = 'submit' class = 'btn btn-primary' name = "submit">Submit</button>
        </div>  
    </form>
</div>
</body>
</html>