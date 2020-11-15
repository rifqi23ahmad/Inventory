<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }

    include "header.php";
    include "config/config.php";
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Organisasi</h1> -->
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            <!-- </div> -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-0">
                <!-- <div class="col-lg-4">
                <h6 class="m-0 font-weight-bold text-primary">organisasi</h6>
                </div> -->
                
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <div class="row"> 
                        <div class="col-sm-12 col-md-3">
                            <h1 class="h3 mb-0 text-gray-800">Data Peminjam</h1>
                        </div>

                        <div class="col-sm-12 col-md-9">
                            <p>
                                <a href="peminjam_input.php" class="btn btn-info">Tambah Data</a>
                            </p>
                        </div>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th width="5%">No</th>
                        <th>Nama Pemohon</th>
                        <th>NIM/NIK/NIP</th>
                        <th>No Telp/WA</th>
                        <th>Ket</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['nim_nip_nik']?></td>
                        <td><?php echo $row['no_telp']?></td>
                        <td><?php echo $row['sebagai']?></td>
                        <td>
                            <a class="btn btn btn-success" href="peminjam_detail.php?id=<?php echo $row['id_pendaftar']?>" 
                            >Detail</a>&nbsp;
                            <a class="btn btn btn-warning" href="peminjam_edit.php?id=<?php echo $row['id_pendaftar']?>" 
                            onclick="return confirm('Apakah anda yakin ingin mengedit data ini?')">Edit</a>
                            <a class="btn btn btn-danger" href="peminjam_proses.php?url=<?php echo $row['id_pendaftar']?>" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>

                        </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2019</span>
            </div>
            </div>
        </footer>
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
