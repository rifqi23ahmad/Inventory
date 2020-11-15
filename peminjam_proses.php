<?php
include "config/config.php";

$var_nama = $_POST['txt_nama'];
$var_nim = $_POST['txt_nim'];
$var_telp = $_POST['txt_telp'];
$var_ket = $_POST['txt_ket'];

if (isset($_POST['btn_simpan'])) {
	$query = ("insert into tb_pendaftar (nama, nim_nip_nik, sebagai, no_telp, password, status) values 
	('$var_nama','$var_nim','$var_ket','$var_telp','1234',1)");
} elseif (isset($_POST['btn_edit'])) {
	$var_id = $_POST['txt_id'];{
	$query = "UPDATE tb_pendaftar SET nama='$var_nama', nim_nip_nik='$var_nim', sebagai='$var_ket', 
	no_telp='$var_telp' WHERE id_pendaftar='$var_id'";
	}
} else {
	$id = $_GET['url'];
	$query = "DELETE FROM tb_pendaftar WHERE id_pendaftar = $id";
}
mysqli_query($koneksi,$query);
header('location:peminjam.php');
?>