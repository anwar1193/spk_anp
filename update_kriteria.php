<?php
include_once("koneksi.php");
if(isset($_POST['update'])) {
	$kode_kriteria = $_POST['kode_kriteria'];
	$nm_kriteria = $_POST['nm_kriteria'];


	// Insert user data into table
$update_kriteria = mysqli_query($koneksi, "UPDATE kriteria SET nm_kriteria='$nm_kriteria' WHERE kode_kriteria="."'".$kode_kriteria."'");
header("location:input.php");
}



$kode_kriteria = $_GET['kode_kriteria'];
$get_kode = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria="."'".$kode_kriteria."'");
while($update = mysqli_fetch_array($get_kode))
{
	$nm_kriteria = $update['nm_kriteria'];
}

include 'header.php'
?>
<body>
	<a href="input.php">Home</a>
	<br/><br/>

	<form name="update_kriteria" method="post" action="update_kriteria.php">
		<table class="table table-bordered" border="0">
			<tr> 
				<th>Kode Kriteria</th>
				<td><input class="form-control" type="text" name="kode_kriteria" value=<?php echo $kode_kriteria;?>></td>
			</tr>
			<tr> 
				<th>Kriteria</th>
				<td><input class="form-control" type="text" name="nm_kriteria" value=<?php echo $nm_kriteria;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kode_kriteria" value=<?php echo $_GET['kode_kriteria'];?>></td>
				<td><input class="btn btn-info" type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
	<?php include 'footer.php'; ?>