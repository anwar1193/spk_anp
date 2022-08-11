<?php
include_once("koneksi.php");

// Get id from URL to delete that user
$nip = $_GET['nip'];
// echo $kode;

//select karyawan
$quser = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nip='$nip'");

//dapetin iduser
$datauser = mysqli_fetch_array($quser);
$iduser = $datauser['id_user'];
// Delete user row from table based on given id
$hapus_karyawan = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nip='$nip'");

//delete table user where iduser

$hapus_user = mysqli_query($koneksi, "DELETE FROM user WHERE id='$iduser'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:input.php");
?>