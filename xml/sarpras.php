<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: text/xml");
    include '../config/config.php';

    $query = "SELECT * FROM tb_sarpras";
    $qx = mysqli_query($koneksi,$query);
    $e = mysqli_num_rows($qx);
?>
<p>
<list>
<?php while ($row = mysqli_fetch_array($qx)) { ?>
    <listdata>
        <id_sarpras><?=$row['id_sarpras'];?></id_sarpras>
        <nama_sarpras><?=$row['nama_sarpras'];?></nama_sarpras>
        <ket><?=$row['ket'];?></ket>
    </listdata>
    <?php } ?>
</list>
</p>