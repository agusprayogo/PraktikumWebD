<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js.js"></script>
</head>
<body>
	<div align="center">
		<?php
		include 'conn.php';
		include 'header.php';
		?>
		<h1>Daftar Mahasiswa</h1>
		<table id="myTable">
			<tr>
				<th onclick="sortTable(0)">NIM</th>
				<th onclick="sortTable(1)">Nama</th>
				<th onclick="sortTable(2)">Kuota</th>
				<th onclick="sortTable(3)">Status</th>
			</tr>
			<?php
			$result=$conn->query('select * from mahasiswa;');
			if ($result-> num_rows>0) {
				while ($row=$result->fetch_assoc()) {
					echo '<tr><td>';
						echo '<label>'.$row['nim'].'</label>';
					echo '</td><td>';
						echo '<label>'.$row['nama'].'</label>';
					echo '</td><td>';
						echo '<label>'.$row['kuota'].'</label>';
					echo '</td><td>';
						echo '<label>'.$row['status'].'</label>';
					echo '</td></tr>';
				}
			}
			else{

			}
			?>
		</table>
	</div>
</body>
</html>
