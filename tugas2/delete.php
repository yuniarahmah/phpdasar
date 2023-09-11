<?php
include 'connect2.php';
session_start();

if(!isset( $_SESSION['loged_in']) ||  $_SESSION['loged_in'] !== true)
// {
//     {
//         header( 'location:read.php' );
//     }
//     exit();
// } ;

if ( isset( $_GET['id'] ) ) {
    $id = $_GET['id'];
    $query = "DELETE FROM  admin WHERE id = $id";
    $result = mysqli_query( $conn, $query );
    if ($result){
        header( 'location:read.php' );
    } else {
        die( $conn->connect_error );
    }
}
?>