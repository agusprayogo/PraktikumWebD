<?php
session_start();
include 'conn.php';
if (isset($_POST['type'])) {
	if ($_POST['type']=='1') {//mhs
		$nim=$_POST['nim'];
		$pass=$_POST['password'];
		$result=$conn->query("select * from mahasiswa where nim='$nim' and password='$pass'");
		$row=mysqli_fetch_array($result);
		if($row['nim']==$nim and $row['password']==$pass){
			$_SESSION['mahasiswa']=$row['nama'];
			header('location: mahasiswa.php');
		}
		else{
			header('location:index.php');
		}
	}
	elseif ($_POST['type']=='2') {//dosen
		$nip=$_POST['nip'];
		$pass=$_POST['password'];
		$result=$conn->query("select * from dosen where nim='$nip' and password='$pass'");
		$row=mysqli_fetch_array($result);
		if($row['nip']==$nip and $row['password']==$pass){
			$_SESSION['dosen']=$row['nama'];
			header('location: dosen.php');
		}
		else{
			header('location:index.php');
		}
	}
	else {
		echo 'imposibru';
	}
}
?>
