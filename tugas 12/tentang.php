<!DOCTYPE html>
<html>
<head>
	<title>Tentang</title>
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
					<h1>Selamat Datang</h1>
		            <p>Situs ini adalah situs resmi dari Universitas Udayana.</p>
		            <h1>Visi</h1>
		            <p>Terwujudnya perguruan tinggi yang unggul, mandiri, dan berbudaya.</p>
		            <h1>Misi</h1>
		            <ol>
		            	<li>Menyelenggarakan pendidikan tinggi yang bermutu dan menghasilkan lulusan yang memiliki moral/etika/akhlak dan integritas yang tinggi sesuai dengan tuntutan masyarakat lokal, nasional, dan internasional</li>
		            	<li>Mengembangkan penelitian dan pengabdian kepada masyarakat sesuai dengan kepentingan masyarakat dan bangsa</li>
		            	<li>Memberdayakan Unud sebagai lembaga yang menghasilkan dan mengembangkan pengetahuan, teknologi, dan budaya yang dapat dimanfaatkan untuk kesejahteraan masyarakat</li>
		            	<li>Menghasilkan karya inovatif dan prospektif bagi kemajuan Unud serta perekonomian nasional</li>
		            </ol>
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
