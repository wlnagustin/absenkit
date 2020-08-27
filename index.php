<!DOCTYPE html>
<html>
<head>
	<title>Website Absensi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<font face="arial black">
	<h1><b>WEBSITE APLIKASI ABSENSI<br/>SMK NEGERI 9 SEMARANG</b></h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p><br/>
 
		<form action="cek_login.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>	
	</div>
	<br/>
	<center>
	<i><font color="black" font size="3">
		COPYRIGHT @ANW XII-RPL/02 SMKN 9 SMG
		<br/>
	</font></i>
</center>
</body>
</html>