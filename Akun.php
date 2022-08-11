<?php
include 'header.php';
include 'koneksi.php';
include 'list_data.php';
?>
<?php 

$akun = mysqli_query($koneksi, 'SELECT * FROM karyawan JOIN user ON user.id = karyawan.id_user');
// while($data = mysqli_fetch_array($akun))

// {
// 	$nip = $data['nip'];
// 	$nama_karyawan = $data['nama_karyawan'];
// 	var_dump($data);
// }


?>
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link" href="input.php">Data</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="perhitungan.php">Perhitungan</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="owner2.php">Ranking Karyawan</a>
	</li>
	<li class="nav-item">
		<a class="nav-link active" href="akun.php">Akun Karyawan</a>
	</li>
</ul>
<br>
<div>
	<font size="3"><center><b>Akun Karyawan</b></center></font>
	<br>
</div>
<thead>

	<table class="table table-bordered tableOwner mb-3" id="dataTable" cellspacing="0">
		<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
			</tr>
		</thead>
	</thead>
	<tbody>
		<?php
		$no=1;
		while($user_data = mysqli_fetch_array($akun)) { ?>
			<tr>
				<td></td>
				<td><?= $user_data['nip']; ?></td>
				<td><?= $user_data['nama_karyawan']; ?></td>
				<td><?= $user_data['username']; ?></td>
				<td><?= $user_data['password']; ?></td>
				<td><?= $user_data['level']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php
include 'footer.php';
?>
?