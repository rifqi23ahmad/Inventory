<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: text/xml");
    include '../config/config.php';

    $user = $_POST['nim_nip_nik'];
    $pass = $_POST['password'];   

    $q = "SELECT * FROM tb_pendaftar WHERE `nim_nip_nik`='{$user}' and `password`='{$pass}'";
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