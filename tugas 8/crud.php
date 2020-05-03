<?php
$conn = mysqli_connect('localhost','root','','praktikum');
if (isset($_POST['add'])) {
	$conn->query("INSERT INTO `bio` (`id`, `nama`, `alamat`, `gender`, `tempat_lahir`, `tanggal_lahir`) VALUES (NULL, '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['gender']."', '".$_POST['tempat_lahir']."', '".$_POST['tanggal_lahir']."');");
}
if (isset($_POST['edit'])) {
	$str='';
	if ($_POST['nama']!='')$str			=$str."`nama` = '".$_POST['nama']."', ";
	if ($_POST['alamat']!='')$str		=$str."`alamat` = '".$_POST['alamat']."', ";
	if ($_POST['gender']!='')$str		=$str."`gender` = '".$_POST['gender']."', ";
	if ($_POST['tempat_lahir']!='')$str	=$str."`tempat_lahir` = '".$_POST['tempat_lahir']."', ";
	if ($_POST['tanggal_lahir']!='')$str=$str."`tanggal_lahir` = '".$_POST['tanggal_lahir']."', ";
	$str=substr($str, 0, -2);
	echo $str;
	$str="UPDATE `bio` SET ".$str." WHERE `bio`.`id` = ".$_POST['id'].";";
	
	$conn->query($str);
}
if (isset($_POST['delete'])) {
	$conn->query("DELETE FROM `bio` WHERE id='".$_POST['delete']."'");
}
header('location: index.php');

?>
