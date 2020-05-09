<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
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
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<div id='konten' align="center">
					<form action="login.php" method="post">
						<input type="text" name="nama" placeholder="username"><br><br>
						<input type="text" name="password" placeholder="username"><br><br>
						<label>masuk sebagai :</label><br>
						<input type="radio" name="status" value="mahasiswa">mahasiswa
						<input type="radio" name="status" value="dosen">dosen<br><br>
						<button type="submit">login</button>
					</form>
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
