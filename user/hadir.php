<?php

session_start();
include('includes/config.php');
error_reporting(0);


$aid = $_GET['aid'];
$idu = $_SESSION['id'];

$query = mysqli_query($con, "INSERT INTO tblhadir (user_id,absen_id,kehadiran) values ('$idu','$aid',1)");
if ($query) {
	
}else
{

echo "<script>alert('Gagal Mengisi Absen');window.location='../user/absen.php';</script>";

}
 ?>
