<?php
session_start();
$nama=$_POST['nama'];
$pass=$_POST['password'];
$status=$_POST['status'];
$conn=mysqli_connect('localhost','root','','session');
$result=$conn->query("select * from user where nama='$nama' and pass='$pass' and status='$status'");
$row=mysqli_fetch_array($result);
if($row['nama']==$nama and $row['pass']==$pass and $row['status']==$status){
	$_SESSION['user']=$row['nama'];
	$_SESSION['st']=$row['status'];
	// $_SESSION['admin'] = $row['username'];
	header('location: index.php');
}
else{
	header('location: loginf.php');
}
?>
