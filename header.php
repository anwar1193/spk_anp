<?
include 'koneksi.php';

?>
<html>
<head>
	<link rel="icon" type="image/background.png" href="images/logo.png">
	<title>PT. xxx </title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/js" href="js/js.js">
	<link rel="stylesheet" type="text/javascript" href="vendor/jquery.min.js">
	<link rel="stylesheet" type="text/javascript" href="js/jquery-1.9.1.min.js">
	<link rel="stylesheet" type="text/javascript" href="js/highcharts.js">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="vendor/datepicker/css/bootstrap-datepicker.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/datatables/css/dataTables.bootstrap4.min.css">
</head>
<body class="background">
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

	?>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-nav mr-auto navbar-text text-white"> Halo <?php echo $_SESSION['username'];?>,	Anda telah login sebagai <?php echo $_SESSION['level']; ?> </a>
		<div class="form-inline my-2 my-lg-0">
			<a class="btn btn-danger my-2 my-sm-0" type="submit" href="Logout.php" class="text-white">Logout</a>
		</div>
	</nav>
	<div class="kotak_barang">
		<center><img src="#" width="80px"></center>
		<br>
		<p class="header mb-0">APLIKASI PENILAIAN, EVALUASI DAN PENENTUAN KARYAWAN TERBAIK</p>
		<p class="header mt-0">PT. xxx </p>
		<hr size="100px">