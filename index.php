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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <!-- <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 mb-3">
              <img class="center" style="display: block;margin-left: auto;margin-right: auto;width: 50%;" src="img/tutwuri.png">
            </div> 
            <div class="col-lg-4"></div> 
          </div> -->

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12 mb-0">

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-body">
                  <p style="text-align: center;">SELAMAT DATANG DI WEBSITE</p>
                  <p style="text-align: center;">Sarana Prasarana Universitas PGRI Yogyakarta</p>
                </div>
                <!-- Content Row -->
          <div class="row">

            <!-- <div class="col-xl-12 col-lg-7"> -->
                <!-- Bar Chart -->
                <!-- <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Barang</h6>
                  </div>
                  <div class="card-body">
                    <div style="width: 800px;margin: 0px auto;">
                      <canvas id="myBarChart"></canvas>
                    </div>
                  </div>
                </div> -->
              <!-- </div> -->
          <!-- </div> -->
              <!-- </div> -->

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>SISTEM INVENTORY BARANG DAN HELP DESK - SD NEGERI JATI PURWOREJO</span>
          </div>
        </div>
      </footer> -->
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

<script>
	var ctx = document.getElementById("myBarChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Kayu", "Baja", "Baja Ringan", "IT"],
			datasets: [{
				label: '',
				data: [
				<?php 
				$jumlah_kayu = mysqli_query($koneksi,"select * from tb_barang where id_kategori=1");
				echo mysqli_num_rows($jumlah_kayu);
				?>, 
				<?php 
				$jumlah_baja = mysqli_query($koneksi,"select * from tb_barang where id_kategori=2");
				echo mysqli_num_rows($jumlah_baja);
				?>, 
				<?php 
				$jumlah_bajaringan = mysqli_query($koneksi,"select * from tb_barang where id_kategori=4");
				echo mysqli_num_rows($jumlah_bajaringan);
				?>, 
				<?php 
				$jumlah_it = mysqli_query($koneksi,"select * from tb_barang where id_kategori=5");
				echo mysqli_num_rows($jumlah_it);
				?>
				],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)'
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

</body>

</html>
