<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'inc/config.php';
 
// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$password = md5($_POST['password']);
 
$login = mysqli_query($con,"select * from tblusers where nim='$nim' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah nim dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['type']=="admin"){
 
		// buat session login dan nim
		$_SESSION['login']=$_POST['nim'];
		$_SESSION['id']=$data['id'];
		$_SESSION['nim'] = $nim;
		$_SESSION['type'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin");
 
	// cek jika user login sebagai pegawai
	}else if($data['type']=="anggota"){
		// buat session login dan nim
		$_SESSION['login']=$_POST['nim'];
		$_SESSION['id']=$data['id'];
		$_SESSION['nim'] = $nim;
		$_SESSION['type'] = "anggota";
		// alihkan ke halaman dashboard pegawai
		header("location:user");
 
	// cek jika user login sebagai pengurus
	}else if($data['type']=="pengurus"){
		// buat session login dan nim
		$_SESSION['login']=$_POST['nim'];
		$_SESSION['nim'] = $nim;
		$_SESSION['id']=$data['id'];
		$_SESSION['type'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:user");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
?>