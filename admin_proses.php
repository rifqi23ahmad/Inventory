<?php
include "config/config.php";

$var_nama = $_POST['txt_nama'];
$var_user = $_POST['txt_user'];
$var_pass = $_POST['txt_pass'];


if (isset($_POST['btn_simpan'])) {
	$query = ("insert into tb_admin (username, password, nama_admin, status) 
			values ('$var_user','$var_pass','$var_nama',1)");
} elseif (isset($_POST['btn_edit'])) {
	$var_id = $_POST['txt_id'];
	$query = "UPDATE tb_admin SET username='$var_user', password='$var_pass', nama_admin='$var_nama' 
	WHERE id_admin='$var_id'";
} else {
	$id = $_GET['url'];
	$query = "DELETE FROM tb_admin WHERE id_admin = $id";
}
mysqli_query($koneksi,$query);
header('location:admin.php');
?>