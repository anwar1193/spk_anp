<?php 
include'header.php';
include 'koneksi.php';
include 'list_data.php';
?>

<center><h5>Hasil PENILAIAN dan EVALUASI Karyawan</h5></center>

<?php 

$username=$_SESSION['username'];
$akun = mysqli_query($koneksi, 'SELECT * FROM karyawan JOIN user ON user.id = karyawan.id_user WHERE user.username='.'"'.$username.'"');
while($data = mysqli_fetch_array($akun))
{
	$nip = $data['nip'];
	$nama_karyawan = $data['nama_karyawan'];
	$jabatan = $data['jabatan'];
	$bagian = $data['bagian'];
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
		<td width="20%">Hasil Penilaian</td>
		<td>
			<table>
				<?php
				while($user_data = mysqli_fetch_array($list_kriteria)) { ?>
					<tr>
						<td width="30%"><?= $user_data['nm_kriteria']; ?></td>
						<td>:</td>
					</tr>
				<?php } ?>
				</table>
			</td>
		</tr>
		<tr>
			<td width="20%">Evaluasi</td>
			<td>: Tingkatkan lagi kinerjanya</td>
		</tr>
		<tr>
			<td width="20%">Ranking</td>
			<td>: SELAMAT KAMU MENJADI KARYAWAN TERBAIK BULAN "INI" </td>
		</tr>
	</table>

	<br><br><center><h6>- KERJA DENGAN HATI YANG TULUS AKAN MENGHASILKAN PEKERJAAN YANG MAKSIMAL -</h6></center>
	<?php 
	include("footer.php");
	?>