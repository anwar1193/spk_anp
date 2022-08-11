<?php
include 'header.php';
include 'koneksi.php';
include 'list_data.php';
?>     
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link active" href="input.php">Data</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="perhitungan.php">Perhitungan</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="owner2.php">Ranking Karyawan</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="akun.php">Akun Karyawan</a>
	</li>
</ul>
<br>
<font size="3"><center><b> -- Data Karyawan -- </b></center></font>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" >
	Masukan Data Karyawan
</button>
<br>
<font size="3"><center><b>List Karyawan</b></center></font>
<br>
<table class="table table-bordered tableOwner" id="dataTable" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Bagian</th>
			<th>Tanggapan</th>
		</tr>
	</thead>
	<tbody>	 
		<?php
		$no=1;
		while($user_data = mysqli_fetch_array($list_karyawan)) { ?>

			<tr>
				<td><?= $no++; ?></td>
				<td><?= $user_data['nip']; ?></td>
				<td><?= $user_data['nama_karyawan']; ?></td>
				<td><?= $user_data['jabatan']; ?></td>
				<td><?= $user_data['bagian']; ?></td>
				<td><a href="update_karyawan.php?nip=<?= $user_data['nip']?>" class="badge badge-info">Update</a>
					<a href="hapus_karyawan.php?nip=<?= $user_data['nip']?>" class="badge badge-danger">Delete</a>
				</td>
			</tr>
		<?php	}; ?>
	</tbody>
</table>
<br>
<font size="3"><center><b> --  Data Kriteria -- </b></center></font>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal2" >
	Masukan Data Kriteria
</button>
<br>
<font size="3"><center><b>List Kriteria</b></center></font>
<br>
<table class="table table-bordered tableOwner" id="dataTable" cellspacing="0">
	<thead>
		<tr>
			<th width="5%">no</th>
			<th width="15%">Kode</th>
			<th>Kriteria</th>
			<th width="10%">Tanggapan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($user_data = mysqli_fetch_array($list_kriteria)) { 
			?>
			<tr>
				<td></td>
				<td><?= $user_data['kode_kriteria']; ?></td>
				<td><?= $user_data['nm_kriteria']; ?></td>
				<td><a href="update_kriteria.php?kode_kriteria=<?= $user_data['kode_kriteria']?>" class="badge badge-info">Update</a>
					<a href="hapus_kriteria.php?kode_kriteria=<?= $user_data['kode_kriteria']?>" class="badge badge-danger">Delete</a>
				</td>
			</tr>
		<?php	}; ?> 
	</tbody>
</table>
<br>

<!-- -->

<?php
include 'footer.php';
?>

<!-- Modal Data Karyawan -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Data Karyawan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="tambah_data.php" method="post" name="submit" class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 mb-6">
							<label for="validationCustom01">NIP</label>
							<input type="text" class="form-control" name="nip" id="validationCustom01" placeholder="NIP" required autocomplete="off">
							<div class="invalid-feedback">
								Harap Masukan NIP 
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Nama</label>
							<input type="text" class="form-control" name="nama_karyawan" id="validationCustom02" placeholder="Nama" required autocomplete="off">
							<div class="invalid-feedback">
								Harap Masukan Nama
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Jabatan</label>
							<select class="form-control w-100" name="jabatan" id="exampleFormControlSelect1" autocomplete="off" >
								<option>Direktur Bagian</option>
								<option>Konsultan Senior</option>
								<option>Konsultan Junior</option>
								<option>Assistant Direktur</option>
								<option>Manager</option>
								<option>Staf</option>
							</select>
							<div class="invalid-feedback">
								Harap Masukan Jabatan Perkerjaan
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Bagian</label>
							<select class="form-control w-100" name="bagian" id="exampleFormControlSelect1" autocomplete="off" >
								<option>Konsultasi</option>
								<option>IT</option>
								<option>Legal</option>
								<option>Umum</option>
								<option>Direksi</option>
							</select>
							<div class="invalid-feedback">
								Harap Masukan Bagian Kerja
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Username</label>
							<input type="text" class="form-control" name="username" id="validationCustom02" placeholder="Username" required autocomplete="off">
							<div class="invalid-feedback">
								Harap Masukan Nama
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Password</label>
							<input type="Password" class="form-control" name="password" id="validationCustom02" placeholder="Password" required autocomplete="off">
							<div class="invalid-feedback">
								Harap Masukan Nama
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Level</label>
							<select class="form-control w-100" name="level" id="exampleFormControlSelect1" autocomplete="off" >
								<option>pegawai</option>
							</select>
							<div class="invalid-feedback">
								Harap Masukan Bagian Kerja
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input class="btn btn-primary" name="submit" type="submit" placeholder="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
</div>

<!-- Modal Kriteria -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Kriteria</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="tambah_data.php" method="post" name="submit" class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 mb-6">
							<label for="validationCustom01">Kode</label>
							<input type="text" class="form-control" name="kode_kriteria" id="validationCustom01" placeholder="Kode" required autocomplete="off">
							<div class="invalid-feedback">
								Harap Masukan Kode
							</div>
						</div>
						<div class="col-md-6 mb-6">
							<label for="validationCustom02">Kriteria</label>
							<input type="text" class="form-control" name="nm_kriteria" id="validationCustom02" placeholder="Kriteria" required autocomplete="off">
							<div class="invalid-feedback">
								Harap Masukan Kriteria
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input class="btn btn-primary" name="submit" type="submit" placeholder="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
</div>
