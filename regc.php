<?php 
// mengaktifkan 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'inc/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['nim'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con,"select * from tblusers where nim='$username' and Is_Active=0");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
$update = mysqli_query($con,"update tblusers set password='$password' , Is_Active=1 where nim='$username'");
header("location:register.php?pesan=sukses");
}else{
	header("location:register.php?pesan=gagal");
}
?>