<?php
include 'connect.php';
if ( isset( $_POST[ 'submit' ] ) ) {
    $nama_sekolah = $_POST[ 'nama' ];
    $alamat_sekolah = $_POST[ 'alamat' ];
    $sql = "insert into sekolah(nama_sekolah, alamat_sekolah) values('$nama_sekolah', '$alamat_sekolah')";
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
<h3 class = 'text-center'>create</h3>
    <form method = 'post'>
        <div class = 'mb-3'>
            <label for = 'nama' class = 'form-label'>Nama Sekolah</label>
            <input type = 'text' name = "nama" class = 'form-control' id = 'nama'>
        </div>
        <div class = 'mb-3'>
            <label for = 'alamat' class = 'form-label'>Alamat</label>
            <input type = 'text' name="alamat" class = 'form-control' id = 'alamat'>
        </div>  
        <button type = 'submit' class = 'btn btn-primary' name = "submit">Submit</button>
    </form>
</div>
</body>
</html>