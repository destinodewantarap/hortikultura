<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="dark-edition">
      
    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <?php $this->load->view("admin/_partials/navbar.php") ?>
      
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                <div><center><b><p style="font-size: 30pt;" id="pH"></p></b></center></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center; font-size:30px; font-weight: bold;">pH</h4>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div><center><b><p style="font-size: 30pt;" id="suhu"></p></b></center></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center; font-size:30px; font-weight: bold;">Suhu</h4>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                <div><center><b><p style="font-size: 30pt;" id="kelembaban"></p></b></center></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center; font-size:30px; font-weight: bold;">Kelembaban</h4>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
          </div>          
          <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0">
                  <div class="card-body">
                      <button class="btn btn-info submit" type="submit" value="rekomendasi" style="font-size: 20px; ">Rekomendasi</button>
                    </div> 
                  </div>
                </div> 
          </div>
          <!-- footer -->
          <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- script -->
      <?php $this->load->view("admin/_partials/script.php") ?>
    </div>
  </div>
  <?php $this->load->view("admin/_partials/js.php") ?>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>