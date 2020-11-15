<?php
include "config/config.php";

$param_id_kat = $_POST['txt_id_kategori'];
$var_nama = $_POST['txt_nama'];
$var_ket = $_POST['txt_ket'];

if (isset($_POST['btn_simpan'])) {
	$query = ("insert into tb_sarpras (id_kategori, nama_sarpras, ket, status) 
	values ('$param_id_kat','$var_nama','$var_ket',1)");
} elseif (isset($_POST['btn_edit'])) {
	$var_id = $_POST['txt_id'];
	$query = "UPDATE tb_sarpras SET id_kategori='$param_id_kat', nama_sarpras='$var_nama', ket='$var_ket' WHERE id_sarpras='$var_id'";
} else {
	$id = $_GET['url'];
	$query = "DELETE FROM tb_sarpras WHERE id_sarpras = $id";
}
mysqli_query($koneksi,$query);
header('location:sarpras.php');
?>