<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: text/xml");
    include '../config/config.php';

    $var_sarpras = $_POST['tx_sarpras'];
    file_put_contents('id.txt', $var_sarpras);
    $tgl        = explode('/',$_POST['tx_tanggal']); 
    $var_tanggal = $tgl[2].'-'.$tgl[0].'-'.$tgl[1]; 
    file_put_contents('tanggal.txt', $var_tanggal);

    $query = "SELECT s.id_sarpras, nama_sarpras, tgl_mulai, s.`status` FROM 
    tb_peminjaman p right join tb_sarpras s on p.id_sarpras=s.id_sarpras WHERE 
    s.id_sarpras='$var_sarpras' or (tgl_mulai='$var_tanggal' or tgl_mulai=NULL)";

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
        <id_sarpras><?=$row['id_sarpras'];?></id_sarpras>
        <nama_sarpras><?=$row['nama_sarpras'];?></nama_sarpras>
        <tanggal><?=$tgl_mulai = (empty($row['tgl_mulai'])?'-':$row['tgl_mulai']);?></tanggal>
        <status><?=$row['status'];?></status>
    </listdata>
    <?php } ?>
</list>
</p>