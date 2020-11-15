a<?php
    header("Access-Control-Allow-Origin: *");
    // header("Content-type: text/xml");
    include '../config.php';

    $var_aman = $_POST['aman'];
    // file_put_contents('aman.txt', $var_aman);
    $var_fas = $_POST['fas'];
    // file_put_contents('fas.txt', $var_fas);
    $var_nyaman = $_POST['nyaman'];
    // file_put_contents('nyaman.txt', $var_nyaman);
    $var_biaya = $_POST['biaya'];
    // file_put_contents('biaya.txt', $var_biaya);

    if ($_POST): {
        //fetch semua kriteria
        $query = mysqli_query($koneksi,"SELECT * FROM tb_kriteria");
        while ($data = mysqli_fetch_array($query)) {
            $id_kriteria     = $data['id_kriteria'];
            $nama_kriteria   = $data['nama_kriteria'];
        }

        //fetch semua penginapan
        $analisa = mysqli_query($koneksi,"SELECT * FROM tb_penginapan");
        while ($data = mysqli_fetch_array($analisa)) {
            $id_penginapan    = $data['id_penginapan'];
            $nama_penginapan  = $data['nama_penginapan'];
            $alamat           = $data['alamat'];
        }

        //matrik ternormalisasi
        
    
    }

    endif;
?>