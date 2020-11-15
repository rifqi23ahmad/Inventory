<?php
include "config/config.php";

$var_kat = $_POST['txt_kat'];

if (isset($_POST['btn_simpan'])) {
	$query = ("insert into tb_kategori (kategori) values ('$var_kat')");
} elseif (isset($_POST['btn_edit'])) {
	$var_id = $_POST['txt_id'];{
	$query = "UPDATE tb_kategori SET kategori='$var_kat' WHERE id_kategori='$var_id'";
	}
} else {
	$id = $_GET['url'];
	$query = "DELETE FROM tb_kategori WHERE id_kategori = $id";
}
mysqli_query($koneksi,$query);
header('location:kategori.php');
?>