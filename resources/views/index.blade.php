<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard - SIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fevicon -->
  <link rel="icon" href="img/logo.png" type="image/gif" />
  <link rel="stylesheet" type="text/css" href="dist/css/adminx.css" media="screen" />

    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
    <script>
      window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          axisX:{
            valueFormatString: "DD MMM YYYY",
            crosshair: {
              enabled: true,
              snapToDataPoint: true
            }
          },
          axisY: {
            includeZero: true,
            valueFormatString: "0.0",
            crosshair: {
              enabled: true,
              snapToDataPoint: true,
              labelFormatter: function(e) {
                return "" + CanvasJS.formatNumber(e.value, "0");
              }
            }
          },
          data: [{
            type: "area",
            xValueFormatString: "DD MMM YYYY",
            yValueFormatString: "0",
            dataPoints: [
            { x: new Date(2020, 00, 01), y: 0 },
            { x: new Date(2020, 00, 02), y: 0 },
            { x: new Date(2020, 00, 03), y: 0 },
            { x: new Date(2020, 00, 04), y: 0 },
            { x: new Date(2020, 00, 05), y: 0 },
            { x: new Date(2020, 00, 06), y: 0 },
            { x: new Date(2020, 00, 07), y: 0 }
            ]
          }]
        });
        chart.render();

      }
    </script>
  </head>
  <body>
    <!-- Start Navigasi -->
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
          <img src="img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          Sistem Informasi Puskesmas
        </a>



        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Start Online Contacts-->
          <li class="nav-item dropdown d-flex align-items-center mr-2">
            <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
              <i class="oi oi-chat display-inline-block align-middle"></i>
              <span class="nav-link-notification-number">0</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
              <div class="notifications-header d-flex justify-content-between align-items-center">
                <span class="notifications-header-title">
                  Online Contacts
                </span>
                <small>(0)</small>
              </div>

              <div class="list-group">
                <div class="notifications-header d-flex justify-content-between align-items-center">
                  <span class="notifications-header-title">
                    Nama Orang
                  </span>
                </div>			
              </div>

              <div class="notifications-footer text-center">

              </div>
            </div>
          </li>
          <!-- End Online Contacts -->

          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="img/user.jpg" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

              <a class="dropdown-item text-danger" href="login.html">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>
      <!--end Navigasi-->
      <!-- expand-hover push -->
      <!-- Start Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="index.html" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="inbox"></i>
              </span>
              <span class="sidebar-nav-name">
                Transaksi
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a href="transaksi/pendaftaran/index_pendaftaran.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    PD
                  </span>
                  <span class="sidebar-nav-name">
                    Pendaftaran
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="transaksi/pelayanan/pelayanan.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    PL
                  </span>
                  <span class="sidebar-nav-name">
                    Pelayanan
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- Sidebar End -->

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>

            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 text-white text-center mb-grid w-100" style="background-color: #4F81BC">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Kunjungan Pasien Dalam Wilayah Hari Ini</div>
                      <h3 class="card-title mb-0" style="color:white;">
                        0
                      </h3>
                      <small>Kunjungan Loket</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-danger text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title text-black">Kunjungan Pasien Luar Wilayah Hari Ini</div>
                      <h3 class="card-title mb-0" style="color:white;">
                        0
                      </h3>
                      <small>Kunjungan Loket</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Kunjungan Pasien Luar Kota Hari Ini</div>
                      <h3 class="card-title mb-0" style="color:white;">
                        0
                      </h3>
                      <small>Kunjungan Loket</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-secondary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Jumlah Seluruh Pasien Terdaftar</div>
                      <h3 class="card-title mb-0" style="color:white;">
                        0
                      </h3>
                      <small>Pasien</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
             <div class="col-md-6 col-lg-3 d-flex">
              <div class="card border-0 text-white text-center mb-grid w-100" style="background-color: #4F81BC">
                <div class="d-flex flex-row align-items-center h-100">
                  <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                    <i data-feather="users"></i>
                  </div>
                  <div class="card-body">
                    <div class="card-info-title">Pasien Dalam Wilayah Minggu Ini</div>
                    <h3 class="card-title mb-0" style="color:white;">
                      0
                    </h3>
                    <small>Kunjungan Loket</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex">
              <div class="card border-0 bg-danger text-white text-center mb-grid w-100">
                <div class="d-flex flex-row align-items-center h-100">
                  <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                    <i data-feather="users"></i>
                  </div>
                  <div class="card-body">
                    <div class="card-info-title text-black">Pasien Luar Wilayah Minggu Ini</div>
                    <h3 class="card-title mb-0" style="color:white;">
                      0
                    </h3>
                    <small>Kunjungan Loket</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex">
              <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                <div class="d-flex flex-row align-items-center h-100">
                  <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                    <i data-feather="users"></i>
                  </div>
                  <div class="card-body">
                    <div class="card-info-title">Pasien Luar Kota Minggu Ini</div>
                   <h3 class="card-title mb-0" style="color:white;">
                      0
                    </h3>
                    <small>Kunjungan Loket</small>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="card-header-title">Grafik Kunjungan 7 Hari Terakhir</div>


                </div>
                <div class="card-body collapse show" id="card1">
                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
          <br>


          <div class="row">
            <div class="col-lg-6">
              <!-- Table with border -->
              <div class="card mb-grid">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="card-header-title">5 Diagnosa Terbanyak 30 Hari Terakhir</div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Kode Penyakit</th>
                        <th scope="col" class="text-center">Penyakit</th>
                        <th scope="col" class="text-center">Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-center"></th>
                        <td></td>
                        <td></td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- // Table with border -->
            </div>
            <div class="col-lg-6">
                 <div class="card mb-grid">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="card-header-title">5 Kunjungan Poli Terbanyak 30 hari Terakhir</div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Nama Poli</th>
                        <th scope="col" class="text-center">Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-center"></th>
                        <td scope="row" class="text-center"></td>
                        
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
 <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <small>
                &copy;2019 Sistem Informasi Puskesmas | All Rights Reserved
              </4>
            </small>
            
          </div>
        </div>
      </div>
    </div>
  </footer>
    </div>
  </div>

  <!-- If you prefer jQuery these are the required scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="dist/js/vendor.js"></script>
  <script src="dist/js/adminx.js"></script>
  <!-- chart -->
  <script src="dist/js/canvasjs.min.js"></script>

  <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
      <script src="./dist/js/adminx.vanilla.js"></script-->
      </body>
      </html>