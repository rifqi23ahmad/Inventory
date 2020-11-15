<?php
include "config/config.php";

$var_ruang = $_POST['txt_ruang'];

if (isset($_POST['btn_simpan'])) {
	$query = ("insert into tb_ruang (nama_ruang) values ('$var_ruang')");
} elseif (isset($_POST['btn_edit'])) {
	$var_id = $_POST['txt_id'];{
	$query = "UPDATE tb_ruang SET nama_ruang='$var_ruang' WHERE id_ruang='$var_id'";
	}
} else {
	$id = $_GET['url'];
	$query = "DELETE FROM tb_ruang WHERE id_ruang = $id";
}
mysqli_query($koneksi,$query);
header('location:ruang.php');
?>