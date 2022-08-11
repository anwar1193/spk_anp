<html>
<head>
	<link rel="icon" type="image/png" href="images/logo.png">
	<title>PT. xxx </title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body class="background">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
	<center><img src="#" width="80px"></center>
	<br>
		<p class="header">pt. xxx </p>
		<form method="post" action="login/cek_login.php">	
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-fw fa-user"></i></span>
				</div>
				<input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="input-group pt-2">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-fw fa-lock"></i></span>
				</div>
				<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<div class="input-group justify-content-center pt-2">
				<button class="btn btn-primary btn-lg w-100" type="submit">Login</button>
			</div>
		</form>
		
	</div>
<script type="text/javascript" src="vendor/jquery.min.js"></script>
<script type="text/javascript" src="vendor/popper.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>