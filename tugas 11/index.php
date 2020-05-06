<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>mahasiswa</th>
		</tr>
		<tr>
			<td>
				<form method="post">
					<input type="text" name="namamahasiswa" placeholder="cari nama mahasiswa...">
					<button type="submit">filter</button>
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<form method="post">
					urut berdasar:
					<input type="radio" name="filmahasiswa" value="nim">NIM
					<input type="radio" name="filmahasiswa" value="nama">nama
					<input type="radio" name="filmahasiswa" value="alamat">alamat
					<input type="radio" name="filmahasiswa"value="telepon">telepon
					<input type="radio" name="filmahasiswa" value="status">status
					<button type="submit">urut</button>
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<th>nim</th>
						<th>nama</th>
						<th>alamat</th>
						<th>telepon</th>
						<th>status</th>
					</tr>
					<?php
		$conn = mysqli_connect('localhost','root','','sorfil');
		$str='';
		if (isset($_POST['namamahasiswa']) and $_POST['namamahasiswa']!='') {
			$str=$str.' where nama like "%'.$_POST['namamahasiswa'].'%"';
		}
		if (isset($_POST['filmahasiswa'])) {
			$str=$str.' order by "'.$_POST['filmahasiswa'].'"';
		}
		echo 'select * from mahasiswa'.$str;
		$result = $conn->query('select * from mahasiswa'.$str);
		if($result-> num_rows>0){
			while ($row=$result-> fetch_assoc()) {
				echo '<tr>';
					echo '<td>';
						echo '<label>'.$row['nim'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['nama'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['alamat'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['telepon'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['status'].'</label>';
					echo '</td>';
				echo '<tr>';
			}
		}
	?>
				</table>
			</td>
		</tr>
		<tr>
			<th>dosen</th>
		</tr>
		<tr>
			<td>
				<form method="post">
					<input type="text" name="namadosen" placeholder="cari nama dosen...">
					<button type="submit">filter</button>
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<form method="post">
					urut berdasar:
					<input type="radio" name="nim">NIP
					<input type="radio" name="nama_mahasiswa">NIDN
					<input type="radio" name="alamat">nama
					<input type="radio" name="telepon">telepon
					<input type="radio" name="status">status
					<button type="submit">urut</button>
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<th>NIP</th>
						<th>NIDN</th>
						<th>nama</th>
						<th>email</th>
					</tr>
					<?php
		$conn = mysqli_connect('localhost','root','','sorfil');
		$str='';
		if ($_POST['namadosen']!='') {
			$str=$str.' where nama like "%'.$_POST['namadosen'].'%"';
		}
		$result = $conn->query('select * from dosen'.$str);
		if($result-> num_rows>0){
			while ($row=$result-> fetch_assoc()) {
				echo '<tr>';
					echo '<td>';
						echo '<label>'.$row['nip'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['nidn'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['nama'].'</label>';
					echo '</td>';
					echo '<td>';
						echo '<label>'.$row['email'].'</label>';
					echo '</td>';
				echo '<tr>';
			}
		}
	?>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
