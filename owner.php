<?php 
include 'koneksi.php';
include 'header.php';
?>     
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link" href="req.php">Penilaian</a>
	</li>
	<li class="nav-item">
		<a class="nav-link active" href="owner.php">Rangking Karyawan</a>
</ul>
<br>
<font size="3"><center><b>Ranking Karyawan Terbaik Bulan ini</b></center></font>
<br>
<table class="table table-bordered tableOwner" id="dataTable" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Bagian</th>
			<th>Rangking</th>
		</tr>
	</thead>
	<tbody>
		<!-- <?php
		$no=1;
		while($user_data = mysqli_fetch_array($list_barang_baik)) { ?>
		-->
		<tr>
			<td><!-- <?= $no++; ?>--></td>
			<td><!--<?= $user_data['kode']; ?>--></td>
			<td><!--<?= $user_data['nama']; ?>--></td>
			<td><!--<?= $user_data['nm_kategori']; ?>--></td>
			<td><!--<?= $user_data['jumlah']; ?>--></td>
			<td><!--<?= $user_data['jumlah']; ?>--></td>
		</tr>
		<!-- <?php	}; ?> -->
	</tbody>
</table>
<br>
<font size="3"><center><b>List Ranking Karyawan Terbaik</b></center></font>
<br>
<table class="table table-bordered tableOwner" id="dataTable" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Bagian</th>
			<th>Rangking</th>
			<th>Bulan</th>
			<th>Tahun</th>
		</tr>
	</thead>
	<tbody>
		<!-- <?php
		$no=1;
		while($user_data = mysqli_fetch_array($list_barang_buruk)) { ?>
		-->
		<tr>
			<td><!-- <?= $no++; ?>--></td>
			<td><!-- <?= $user_data['kode']; ?>--></td>
			<td><!-- <?= $user_data['kode']; ?>--></td>
			<td><!-- <?= $user_data['nama']; ?>---></td>
			<td><!-- <?= $user_data['nm_kategori']; ?>--></td>
			<td><!-- <?= $user_data['jumlah']; ?>--></td>
			<td><!-- <?= $user_data['tanggal']; ?>--></td>
			<td><!-- <?= $user_data['tanggal']; ?>--></td>
		</tr>
		<!-- <?php	}; ?> -->
	</tbody>
</table>
<br>
<!--
	<font size="3"><center><b>Cetak Laporan Karyawan Terbaik</b></center></font>
	<br>
	<div class="form-row justify-content-center">
			<select class="form-control w-50" id="exampleFormControlSelect1" >
				<option>Januari</option>
				<option>Febuary</option>
				<option>Maret</option>
				<option>April</option>
				<option>Mei</option>
				<option>Juni</option>
				<option>Juli</option>
				<option>Agustus</option>
				<option>September</option>
				<option>Oktober</option>
				<option>November</option>
				<option>Desember</option>
			</select>

			<select class="form-control w-50" id="exampleFormControlSelect2">
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
			</select>
	</div>
	<br>
			<a href ="laporanbarangmasuk.php" type="button" class="btn btn-primary btn-block">
		Laporan Karyawan Terbaik
	</a>
	<a href="laporanbarangkeluar.php" type="button" class="btn btn-primary btn-block">
		List Laporan Karyawan Terbaik
	</a>
-->
<?php 
include 'footer.php';
?>