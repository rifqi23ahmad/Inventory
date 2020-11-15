<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: text/xml");
    include '../config/config.php';

    $var_nama       = $_POST['nama'];   
    $var_nim        = $_POST['nim'];   
    $var_notelp     = $_POST['notelp'];   
    $var_sarpras    = $_POST['sarpras'];   
    $var_kep        = $_POST['kep'];   
    $awal           = explode('/',$_POST['awal']); 
    $date_awal      = $awal[2].'-'.$awal[0].'-'.$awal[1]; 
    // file_put_contents('awal.txt', $date_awal);
    $akhir          = explode('/',$_POST['akhir']); 
    $date_akhir     = $akhir[2].'-'.$akhir[0].'-'.$akhir[1]; 
    // file_put_contents('akhir.txt', $date_awal);
    $var_durasi     = $_POST['durasi'];   
    $var_ket        = $_POST['ket'];  

    $query = mysqli_query($koneksi, "UPDATE tb_sarpras SET status='Dipinjamkan' WHERE id_sarpras='$var_sarpras'");
    $update = mysqli_query($koneksi, "UPDATE tb_pendaftar SET status='ACC' WHERE id_sarpras='1'");
    $q = "INSERT INTO tb_peminjaman (id_sarpras,id_pendaftar,keperluan,tgl_mulai,tgl_selesai,durasi,ket,status)
        VALUES ('$var_sarpras','1','$var_kep','$date_awal','$date_awal','$var_durasi','$var_ket','Belum Kembali')";
    // file_put_contents('hahaha.txt', $q);

    $qx = mysqli_query($koneksi,$q);
    $e = mysqli_num_rows($qx);
    
    if($e>0){
        $res = mysqli_fetch_array($qx);
    }else{
        $res['nim_nip_nik']='notfound';
        $res['password']='notfound';
    }
?>
<p>
<logins>
    <login>
        <user><?=$res['nim_nip_nik'];?></user>
        <pass><?=$res['password'];?></pass>
    </login>
</logins>
</p>