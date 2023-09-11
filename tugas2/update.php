<?php
include 'connect2.php';
$id = $_GET['id'];
echo $id;
$get_data = "select * from admin where id=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data); 
$nama_pengguna = $row[ 'nama_pengguna' ];
$email =$row[ 'email' ];
$password = $row[ 'password' ];
$Nomor_HP =$row[ 'Nomor_HP' ];
$alamat =$row[ 'alamat' ];
$username=$row['username'];
// $id=$_POST['id'];
if ( isset( $_POST[ 'submit' ] ) ) {
    $nama_pengguna = $_POST[ 'nama_pengguna' ];
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    $Nomor_HP = $_POST[ 'Nomor_HP' ];
    $alamat = $_POST[ 'alamat' ];
    $username=$_POST['username'];
    // $id=$_POST['id'];
    $sql = "update admin set id=$id, nama_pengguna='$nama_pengguna', email='$email', password='$password', Nomor_HP='$Nomor_HP', alamat='$alamat', username='$username' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result){
        header('location:read.php');
    } else {
        die($conn->connect_error);
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
        <h3 class = 'text-center'>Update</h3>
            <form method = 'post'>
                 <div class = 'mb-3'>
                 <label for = 'nama' class = 'form-label'>Nama_pengguna</label>
                 <input type = 'text' name = "nama_pengguna" class = 'form-control' id = 'nama_pengguna' value= <?php echo $nama_pengguna ?>>
                 </div>
                 <div class = 'mb-3'>
                 <label for = 'email' class = 'form-label'>Email</label>
                 <input type = 'text' name="email" class = 'form-control' id = 'email' value= <?php echo $email ?>>
                 </div>  
                 <div class = 'mb-3'>
                 <label for = 'password' class = 'form-label'>password</label>
                 <input type = 'text' name="password" class = 'form-control' id = 'password' value= <?php echo $password ?>>
                 </div>  
                 <div class = 'mb-3'>
                 <label for = 'Nomor_HP' class = 'form-label'>Nomor_HP</label>
                 <input type = 'text' name="Nomor_HP" class = 'form-control' id = 'Nomor_HP' value= <?php echo $Nomor_HP ?>>
                 </div>  
                 <div class = 'mb-3'>
                 <label for = 'alamat' class = 'form-label'>Alamat</label>
                 <input type = 'text' name="alamat" class = 'form-control' id = 'alamat' value= <?php echo $alamat ?>>
                 </div>  
                 
                 <button type = 'submit' class = 'btn btn-primary' name = "submit">Submit</button>
                </form>
    </div>
</body>
</html>