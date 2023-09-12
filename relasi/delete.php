<?php
include 'connect.php';

if ( isset( $_GET['id'] ) ) {
    $id = $_GET['id'];
    $query = "DELETE FROM siswa WHERE id_siswa = $id";
    $result = mysqli_query( $conn, $query );
    if ($result){
        header( 'location:siswa.php' );
    } else {
        die( $conn->connect_error );
    }
}
?>