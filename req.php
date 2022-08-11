<?php
include 'header.php';
include 'koneksi.php';
include 'list_data.php';
?>

<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link active" href="req.php">Penilaian</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="owner.php">Rangking Karyawan</a>
</ul>
<br>
<div>
<font size="3"><center><b>Penilaian Karyawan</b></center></font>
<br>
</div>
<thead>
	<table class="table table-bordered tableOwner mb-3" id="dataTable" cellspacing="0">
		<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Bagian</th>
				<th>Penilaian</th>
			</tr>
		</thead>
	</thead>
	<tbody>
		<?php
		$no=1;
		while($user_data = mysqli_fetch_array($list_karyawan)) { ?>
		<tr>
			<td></td>
			<td><?= $user_data['nip']; ?></td>
			<td><?= $user_data['nama_karyawan']; ?></td>
			<td><?= $user_data['jabatan']; ?></td>
			<td><?= $user_data['bagian']; ?></td>
			<td>
				<a href="formpenilaian.php?nip=<?= $user_data['nip']?>" class="badge badge-info">Penilaian</a>
				<a href="tolak.php?kode=<?= $user_data['kodep']?>" class="badge badge-danger">Reset</a>			
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
		
<?php
include 'footer.php';
?>
?