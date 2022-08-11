<?php
include 'header.php';
include 'koneksi.php';
?>
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link" href="input.php">Data</a>
	</li>
	<li class="nav-item">
		<a class="nav-link active" href="perhitungan.php">Perhitungan</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="owner2.php">Ranking Karyawan</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="akun.php">Akun Karyawan</a>
	</li>
</ul>
<br>
<div>
	<font size="3"><center><b>Perhitungan Karyawan Terbaik</b></center></font>
	<br>
</div>
<thead>
	<table class="table table-bordered tableOwner mb-3" id="dataTable" cellspacing="0">
		<thead>
			<tr>
				<th>Kode Pemesanan</th>
				<th>Nama Pemohon</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Kegunaan</th>
				<th>Tanggal</th>
				<th>Konfirmasi</th>
			</tr>
		</thead>
	</thead>
	<tbody>
		<!-- <?php
		$no=1;
		while($user_data = mysqli_fetch_array($kb)) { ?> -->
		<tr>
			<td><!-- <?= $user_data['']; ?>--></td>
			<td><!-- <?= $user_data['']; ?>--></td>
			<td><!-- <?= $user_data['']; ?>--></td>
			<td><!-- <?= $user_data['']; ?>--></td>
			<td><!-- <?= $user_data['']; ?>--></td>
			<td><!-- <?= $user_data['']; ?>--></td>
			<td><!-- <a href="setuju.php?kode=<?= $user_data['kodep']?>&jumlahk=<?= $user_data['jumlahk']?>&namab=<?= $user_data['nama_keluar']?>" class="badge badge-info">Setuju</a>
				<a href="tolak.php?kode=<?= $user_data['kodep']?>" class="badge badge-danger">Tolak</a> --></td>
			</tr>
			<!-- <?php } ?> -->
		</tbody>
	</table>
	<?php
	include 'footer.php';
	?>
	?