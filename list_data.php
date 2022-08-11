<?php
$list_kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
$list_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
$user = mysqli_query($koneksi, "SELECT * FROM user WHERE level='pegawai'");


$list_barang2 = mysqli_query($koneksi, "SELECT * FROM list_barang JOIN kategori_barang ON list_barang.nomer = kategori_barang.nomer WHERE keadaan='baik' AND jumlah > 2 ");
$kategori_barang = mysqli_query($koneksi, "SELECT *FROM kategori_barang");
$lb = mysqli_query($koneksi, "SELECT *FROM list_barang");
$kb = mysqli_query($koneksi, "SELECT *,keluar_barang.nama as nama_keluar FROM keluar_barang JOIN list_barang ON keluar_barang.nama=list_barang.kode where fix = '1'");
$list_barang_baik = mysqli_query($koneksi, "SELECT * FROM list_barang JOIN kategori_barang ON list_barang.nomer = kategori_barang.nomer WHERE keadaan='baik'");
$list_barang_buruk = mysqli_query($koneksi, "SELECT * FROM list_barang JOIN kategori_barang ON list_barang.nomer = kategori_barang.nomer WHERE keadaan!='baik'");
?>