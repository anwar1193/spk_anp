<?php
include("koneksi.php");

if (isset($_POST['update_karyawan'])) {
	$nip = $_POST['nip'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jabatan = $_POST['jabatan'];
	$bagian = $_POST['bagian'];	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_user = $_POST['id_user'];

	//update berdasarkan nip
	$update_karyawan = mysqli_query($koneksi, "UPDATE karyawan SET nip='$nip', nama_karyawan='$nama_karyawan', jabatan='$jabatan', bagian='$bagian' WHERE nip="."'".$nip."'");

	//update berdasarkan iduser
	$update_user = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password' WHERE id="."'".$id_user."'");
	header("location:input.php");

}


// 
$nip = $_GET['nip'];
// $get_kode = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nip="."'".$nip."'");
$get_kode = mysqli_query($koneksi, "SELECT * FROM karyawan JOIN user ON karyawan.id_user=user.id WHERE karyawan.nip="."'".$nip."'");
while($update = mysqli_fetch_array($get_kode))
{
	$nip = $update['nip'];
	$nama_karyawan = $update['nama_karyawan'];
	$jabatan = $update['jabatan'];
	$bagian = $update['bagian'];
	$username = $update['username'];
	$password = $update['password'];
	$id_user = $update['id_user'];
}

include 'header.php'
?>
<body>
	<a href="input.php">Home</a>
	<br/><br/>

	<form name="update_karyawan" method="post" action="update_karyawan.php">
		<table class="table table-bordered" border="0">
			<tr> 
				<th>NIP</th>
				<td><input class="form-control" type="text" name="nip" value=<?php echo $nip;?>>
				</td>
			</tr>
			<tr> 
				<th>Nama Karyawan</th>
				<td><input class="form-control" type="text" name="nama_karyawan" value=<?php echo $nama_karyawan;?>></td>
			</tr>
			<tr> 
				<th>Jabatan</th>
				<td>
					<select class="form-control w-100" name="jabatan" id="exampleFormControlSelect1" autocomplete="off" >
						<option><?php echo $jabatan;?></option>
						<option>Direktur Bagian</option>
						<option>Konsultan Senior</option>
						<option>Konsultan Junior</option>
						<option>Assistant Direktur</option>
						<option>Manager</option>
						<option>Staf</option>
					</select>
				</td>
			</tr>
			<tr> 
				<th>Bagian</th>
				<td><select class="form-control w-100" name="bagian" id="exampleFormControlSelect1" autocomplete="off" >
					<option><?php echo $bagian;?></option>
					<option>Konsultasi</option>
					<option>IT</option>
					<option>Legal</option>
					<option>Umum</option>
					<option>Direksi</option>
				</select>
			</td>
		</tr>
	<!-- </form> -->
	<!-- <form name="update_user" method="post" action="update_karyawan.php"> -->
		<tr> 
			<th>Username</th>
			<td><input class="form-control" type="text" name="username" value=<?php echo $username;?>></td>
		</tr>
		<tr> 
			<th>Password</th>
			<td><input class="form-control" type="text" name="password" value=<?php echo $password;?>></td>
		</tr>
		<tr>
			<td><input type="hidden" name="nip" value=<?php echo $_GET['nip'];?>></td>
			<td><input type="hidden" name="id_user" value=<?php echo $id_user;?>></td>
			<td><input class="btn btn-info " type="submit" name="update_karyawan" value="update"></td>
		</tr>
	</table>
</form>
</body>
<?php include 'footer.php'; ?>