<!DOCTYPE html>
<html>
<head>
	<title>Halaman guru</title>
	<body bgcolor = #ebf9fb>
</head>
<body>
	<?php 
	session_start();

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<style type="text/css">
	.apsmk{
		background: rgb(126, 126, 151);
		height: 550px;
		width: 810px;
		margin: 5px;
		background-color: white;
	}
</style>
</body>

<body>
	<center>
		<div class="apsmk">
			<tr>
				<td>
					<font face="verdana">
						<h1 align="center"><font color="black" font size="3"><b>
							<IMG SRC ="logosmkn9.jpg" width="270" height="340">
							<br/>
							HALLO GURU ...<br/>
							SELAMAT DATANG DI APLIKASI ABSENSI SMK NEGERI 9 SEMARANG<br/>
							JL. PETERONGAN SARI NO.2, PETERONGAN<br/>
							KOTA SEMARANG, JAWA TENGAH<br/>
						</IMG></b></font></h1>
						</font>
					</td>
				</tr>
			</div>
			<br/>
			<b><font color="black" font size="3">
			COPYRIGHT @ANW XII-RPL/02 SMKN 9 SMG
			<br/>
			<br/>
			<a href="logout.php">LOGOUT</a>
			<br/>
			<br/>
		</font></b>
	</center>
</body>
</html>