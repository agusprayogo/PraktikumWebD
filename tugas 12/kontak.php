<!DOCTYPE html>
<html>
<head>
	<title>Kontak</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<table align="center">
		<tr>
			<td>
                <div>
                	<img src="img/download.png" >
	                <br><p><hr></p>
	                <ul>
	                    <li><a>Desain Web</a></li>
	                    <li><a>Kegiatan</a></li>
	                    <li><a>CSS</a></li>
	                    <li><a>Lain-lain</a></li>
	                </ul>
                </div>
            </td>
			<td>
				<div id='sampul'>
					<h1 class='judul'>Universitas Udayana</h1>
				</div>
				<div id='header'>
					<ul class='ul'>
						<li class='li'>
							<a class='a' href="index.php">Home</a>
						</li>
						<li class='li'>
							<a class='a' href="tentang.php">Tentang</a>
						</li>
						<li class='li'>
							<a class='a' href="profil.php">Profil</a>
						</li>
						<li class='li'>
							<a class='a' href="kontak.php">Kontak</a>
						</li>
						<li class='li'>
							<?php
							session_start();
							if (isset($_SESSION['user'])) {
								echo "<a class='a' href='logout.php'>Logout</a>";
							}
							else{
								header('location:loginf.php');
							}
							?>
						</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id='loginsession'>
				<?php
					if (isset($_SESSION['user'])) {
						echo '<h2>'.$_SESSION['st'].'</h2>';
						echo 'Selamat datang, '.$_SESSION['user'];
					}
				?>
				</div>
			</td>
			<td>
				<div id='konten'>
					<table align="center">
						<tr>
							<td colspan="3">
								<img src="img/hehe.jpg" width="150px">
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>Agus Prayogo</td>
						</tr>
						<tr>
							<td>email</td>
							<td>:</td>
							<td>agusprayogo99@gmail.com</td>
						</tr>
						<tr>
							<td>Telp.</td>
							<td>:</td>
							<td>+628123456789</td>
						</tr><tr>
							<td>Line</td>
							<td>:</td>
							<td>agus_prayogo99</td>
						</tr>
					</table>
				</div>
				<div id='footer'>
					<p class="text-footer">© Copyright 2020 All Right Reserved</p>
            		<p class="text-footer">Ilmu Komputer Universitas Udayana</p>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>
