<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: text/xml");
    include '../config/config.php';

    $var_nim = $_POST['tx_nim'];
    file_put_contents('nim.txt', $var_nim);

    $query = "SELECT q.id_pendaftar, nim_nip_nik, nama, p.`status` FROM 
    tb_peminjaman p JOIN tb_pendaftar q ON p.id_pendaftar=q.id_pendaftar
    WHERE nim_nip_nik='$var_nim'";

    file_put_contents('query.txt', $query);

    $qx = mysqli_query($koneksi,$query);
    $e = mysqli_num_rows($qx);

    // if($e>0){
    //     $res = mysqli_fetch_array($qx);
    // }else{
    //     echo "not found";
    // }
?>
<p>
<list>
<?php while ($row = mysqli_fetch_array($qx)) { ?>
    <listdata>
        <id_pendaftar><?=$row['id_pendaftar'];?></id_pendaftar>
        <nim><?=$row['nim_nip_nik'];?></nim>
        <nama><?=$row['nama'];?></nama>
        <status><?=$row['status'];?></status>
    </listdata>
    <?php } ?>
</list>
</p>