<?php include( 'connect2.php' ) ?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Daftar</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin = 'anonymous'>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js'
integrity = 'sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin = 'anonymous'>
</script>

</head>
<body class = 'min-vh-100 d-flex align-items-center'>
<div class = 'card w-100 m-auto p-3'>
<h3 class = 'text-center' >Formulir</h3>
<!-- <button <a herf="create.php" >nisa</button> -->
<a href="data_pengguna.php">add</a>
<table class = 'table  table-striped'>
<thead>
<tr>

<th scope = 'col'>nama_pengguna</th>
<th scope = 'col'>email</th>
<th scope = 'col'>password</th>
<th scope = 'col'>Nomor_HP</th>
<th scope = 'col'>Alamat</th>
</tr>
</thead>
<tbody classs = 'table-grup-divider'>
<?php
$sql = 'select * from admin ';
$result = mysqli_query( $conn, $sql );
if ( $result ) {
    while( $data = mysqli_fetch_assoc( $result ) ) {
        $id = $data[ 'id' ];
        $nama_pengguna = $data[ 'nama_pengguna' ];
        $email = $data[ 'email' ];
        $password = $data[ 'password' ];
        $Nomor_HP = $data[ 'Nomor_HP' ];
        $Alamat = $data[ 'alamat' ];
        echo '
            <tr>
            <td>'.$nama_pengguna.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>'.$Nomor_HP.'</td>
            <td>'.$Alamat.'</td>
            <td class="text-center">
            <a href="update.php?id='.$id.'" class="btn btn-sm btn-primary">Update</a>
            <button onclick="hapus('.$id.')" class="btn btn-sm btn-danger">Delete</button>
            </td>
            </tr>
            ';
    }
}
?>
</tbody>
</table>
<div class = 'container-logout'>
<a href = 'logout.php' class = 'btn'><button type="button" class="btn btn-dark">LOG UOT</button></a>
</div>
</div>
<script>

function hapus( id ) {
    var yes = confirm( 'Yakin Di Hapus?' );
    if ( yes === true ) {
        window.location.href = 'delete.php?id=' + id;
    }
}
</script>
</body>
</html>
