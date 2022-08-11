<?php
include 'header.php';
include 'koneksi.php';
include 'list_data.php';
?>
<?php 
$nip = $_GET['nip'];
$get_kode = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nip=$nip");
while($update = mysqli_fetch_array($get_kode))
{
	$nip = $update['nip'];
	$nama_karyawan = $update['nama_karyawan'];
	$jabatan = $update['jabatan'];
	$bagian = $update['bagian'];
}

?>

<table>
	<tr>
		<td width="20%">NIP</td>
		<td>: <?php echo $nip;?></td>
	</tr>
	<tr>
		<td width="20%">Nama</td>
		<td>: <?php echo $nama_karyawan;?></td>
	</tr>
	<tr>
		<td width="20%">Jabatan</td>
		<td>: <?php echo $jabatan;?></td>
	</tr>
	<tr>
		<td width="20%">Bagian</td>
		<td>: <?php echo $bagian;?></td>
	</tr>
	<tr>
		<td colspan="2">
			<h5 align="center"> - PENILAIAN KARYAWAN - </h5>
		</td>	
	</tr>
	<table> 
		<form action="#" method="post" name="submit" class="needs-validation" novalidate>
			<tr>
				<th width="300px"><center>Kriteria</center></th>
				<th width="100px" colspan="4"><center>Penilaian</center></th>
			</tr>
			<?php
			while($user_data = mysqli_fetch_array($list_kriteria)) { ?>
				<tr>
					<td><?= $user_data['nm_kriteria']; ?></td>
					<td><center>
						<div class="btn-group btn-group-toggle" data-toggle="buttons">
							<label class="btn btn-secondary">
								<input type="radio" name="options" id="option1" autocomplete="off" value="1" checked> Buruk Sekali
							</label>
							<label class="btn btn-secondary">
								<input type="radio" name="options" id="option2" autocomplete="off" value="2"  checked> Buruk
							</label>
							<label class="btn btn-secondary">
								<input type="radio" name="options" id="option3" autocomplete="off" value="3" checked> Cukup
							</label>
							<label class="btn btn-secondary">
								<input type="radio" name="options" id="option3" autocomplete="off" value="4" checked> Baik
							</label>
							<label class="btn btn-secondary">
								<input type="radio" name="options" id="option3" autocomplete="off" value="5" checked> Baik Sekali
							</label>
						</div>
					</tr>
				<?php } ?>
				<tr>
					<td colspan="6">Evaluasi
						<textarea class="form-control" aria-label="With textarea"></textarea>
					</td>
				</tr>
				<tr>	
					<td colspan="6">	
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Saya yakin mengisi Penilaian ini dengan Subyektif</label>
							<div class="invalid-feedback">
								Ceklis jika anda yakin
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="5">
						<a class="btn btn-primary" type="button" href="req.php" class="text-white">Kembali</a>
						<input class="btn btn-primary" name="submit" type="submit" placeholder="Simpan">
					</td>
				</tr>
			</form>
		</table>

		<?php
		include 'footer.php';
		?>