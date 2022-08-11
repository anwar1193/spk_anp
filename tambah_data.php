<?php
if(isset($_POST['submit'])) {
	$kode_kriteria = $_POST['kode_kriteria'];
	$nm_kriteria = $_POST['nm_kriteria'];

	// include database connection file
	include_once("koneksi.php");

		// Insert user data into table
	$insert_data = mysqli_query($koneksi, "INSERT INTO kriteria(kode_kriteria,nm_kriteria) VALUES ('$kode_kriteria','$nm_kriteria')");
	header('location:input.php');
}
 
// if(isset($_POST['submit'])) {
// 	$username = $_POST['username'];
// 	$password = $_POST['password'];
// 	$level = $_POST['level'];
// 	// include database connection file
// 	include_once("koneksi.php");

// 		// Insert user data into table
// 	$insert_data = mysqli_query($koneksi, "INSERT INTO user(username,password,level) VALUES('$username','$password','$level')");
// 	header('location:input.php');
// }

// if(isset($_POST['submit'])) {
// 	$nip = $_POST['nip'];
// 	$nama_karyawan = $_POST['nama_karyawan'];
// 	$jabatan = $_POST['jabatan'];
// 	$bagian = $_POST['bagian'];
// 	// include database connection file
// 	include_once("koneksi.php");

// 		// Insert user data into table
// 	$insert_data = mysqli_query($koneksi, "INSERT INTO karyawan(nip,nama_karyawan,jabatan,bagian) VALUES('$nip','$nama_karyawan','$jabatan','$bagian')");
// 	header('location:input.php');
// }

if (isset($_POST['submit'])) {
	//untuk table karyawan
	$nip = $_POST['nip'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jabatan = $_POST['jabatan'];
	$bagian = $_POST['bagian'];
	//untuk table user
	$username = $_POST['username'];
	$password = $_POST['password'];
	// $password = md5($_POST['password']);
	$level = $_POST['level'];

	include_once("koneksi.php");

	// Insert user data into table
	$insert_datauser = mysqli_query($koneksi, "INSERT INTO user(username,password,level) VALUES('$username','$password','$level')");

	//select user data to get id user
	$select_iduser = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC LIMIT 1");
	$fetch = mysqli_fetch_assoc($select_iduser);
	$iduser_new = $fetch['id'];

	// insert employee data into table
	$insert_datakaryawan = mysqli_query($koneksi, "INSERT INTO karyawan(nip,nama_karyawan,jabatan,bagian,id_user) VALUES('$nip','$nama_karyawan','$jabatan','$bagian','$iduser_new')");
}



?>