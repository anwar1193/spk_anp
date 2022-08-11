<?php
include_once("koneksi.php");

// Get id from URL to delete that user
$kode_kriteria = $_GET['kode_kriteria'];
// echo $kode;

// Delete user row from table based on given id
$hapus_kriteria = mysqli_query($koneksi, "DELETE FROM kriteria WHERE kode_kriteria='$kode_kriteria'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:input.php");
?>