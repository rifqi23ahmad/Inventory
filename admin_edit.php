<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header("location: login.php");
  }

  include "header.php";
  include "config/config.php";
  $id=$_GET['id'];
  $query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin = $id");
  while ($row = mysqli_fetch_array($query)) {
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
              <div class="col-sm-12 col-md-12">
              <h1 class="h3 mb-0 text-gray-800">Edit Data Admin</h1>
              </div>
              <div class="col-lg-12">
              <form role="form" action="admin_proses.php" method="post" enctype="multipart/form-data">
                <p></p>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" placeholder=""  name="txt_nama" value="<?php echo $row['nama_admin']?>" required>
                    <input type="hidden" name="txt_id" value="<?php echo $row['id_admin']?>">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" placeholder=""  name="txt_user" value="<?php echo $row['username']?>" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" placeholder=""  name="txt_pass" value="<?php echo $row['password']?>" required>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="btn_edit">Simpan</button>
                <button type="reset" class="btn btn-danger" onclick="javascript:history.back()">Batal</button>  
              </div>
              </form>
            </div>
              </div>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php
        }
      ?>
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
