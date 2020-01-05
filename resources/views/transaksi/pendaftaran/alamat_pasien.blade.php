<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Pasien - SIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="../../fonts/material-design-iconic-font/css/material-design-iconic-font.css">

  <!-- fevicon -->
  <link rel="icon" href="../../img/logo.png" type="image/gif" />
  <link rel="stylesheet" type="text/css" href="../../dist/css/adminx.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../dist/css/style.css" media="screen" />
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.dataTables.css">

 
    </head>
    <body>
      <div class="adminx-container">
        <!-- Header -->
        <nav class="navbar navbar-expand justify-content-between fixed-top">
          <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
            <img src="../../img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
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
                <img src="../../img/user.jpg" class="d-inline-block align-top" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                <a class="dropdown-item text-danger" href="../../login.html">Sign out</a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- // Header -->

        <!-- expand-hover push -->
        <!-- Start Sidebar -->
        <div class="adminx-sidebar expand-hover push">
          <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
              <a href="../../index.html" class="sidebar-nav-link active">
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
                  <a href="index_pendaftaran.html" class="sidebar-nav-link">
                    <span class="sidebar-nav-abbr">
                      PD
                    </span>
                    <span class="sidebar-nav-name">
                      Pendaftaran
                    </span>
                  </a>
                </li>

                <li class="sidebar-nav-item">
                  <a href="../pelayanan/pelayanan.html" class="sidebar-nav-link">
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


        <!-- Main Content -->
        <!-- Main Content -->
        <div class="adminx-content">
          <div class="adminx-main-content">

            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index_pendaftaran.html">Pendaftaran</a></li>
                <li class="breadcrumb-item active"  aria-current="page">Tambah</li>
              </ol>
            </nav>

            <div class="row">
              &nbsp&nbsp&nbsp&nbsp <div class="col-1.5">
                <a href="tambah.html" class="btn btn-sm btn-labeled btn-info mr-2">
                  <span class="btn-label">
                    <span class="oi oi-cloud-download" aria-hidden="true"></span>
                  </span>
                  <span class="btn-text">
                    Get Data E-KTP
                  </span>
                </a>
              </div>
              <br>
              <br>
            </div>

            <div class="wrapper">
              <form action="" id="wizard">
                <!-- SECTION 1 -->

                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                  <h3>Alamat Pasien Baru</h3>
                  <div class="form-row">
                    <div class="form-col">
                      <label for="">
                        Provinsi 
                      </label>
                      <div class="form-holder">
                        <i class="zmdi zmdi-pin-drop"></i>
                        <select name="" id="" class="form-control">
                          <option value="pilih" class="option">-Pilih-</option>
                          <option value="united states" class="option">United States</option>
                          <option value="united kingdom" class="option">United Kingdom</option>
                          <option value="viet nam" class="option">Viet Nam</option>
                        </select>
                        <i class="zmdi zmdi-chevron-down"></i>
                      </div>
                    </div>
                    <div class="form-col">
                      <label for="">
                        Alamat Lengkap
                      </label>
                      <div class="form-holder">
                        <i class="zmdi zmdi-home"></i>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"></textarea>
                      </div>
                    </div>                
                    <div class="form-col">
                      <label for="">
                        Kabupaten/Kota
                      </label>
                      <div class="form-holder">
                        <i class="zmdi zmdi-city"></i>
                        <select name="" id="" class="form-control">
                          <option value="pilih" class="option">-Pilih-</option>
                          <option value="united states" class="option">United States</option>
                          <option value="united kingdom" class="option">United Kingdom</option>
                          <option value="viet nam" class="option">Viet Nam</option>
                        </select>
                        <i class="zmdi zmdi-chevron-down"></i>
                      </div>
                    </div>
                    <div class="form-col">
                      <label for="">
                        KodePos
                      </label>
                      <div class="form-holder">
                        <i class="zmdi zmdi-balance"></i>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-col">
                      <label for="">
                        Kecamatan
                      </label>
                      <div class="form-holder">
                        <i class="zmdi zmdi-city-alt"></i>
                        <select name="" id="" class="form-control">
                          <option value="pilih" class="option">-Pilih-</option>
                          <option value="united states" class="option">United States</option>
                          <option value="united kingdom" class="option">United Kingdom</option>
                          <option value="viet nam" class="option">Viet Nam</option>
                        </select>
                        <i class="zmdi zmdi-chevron-down"></i>
                      </div>
                    </div>
                    <div class="form-col">
                      <label for="">
                        Nomor Tlp/HP
                      </label>
                      <div class="form-holder password">
                        <i class="zmdi zmdi-smartphone-iphone"></i>
                        <input type="password" class="form-control">
                      </div>
                    </div>
                    <div class="form-col">
                      <label for="">
                        Kelurahan/Desa
                      </label>
                      <div class="form-holder">
                        <i class="zmdi zmdi-city-alt"></i>
                        <select name="" id="" class="form-control">
                          <option value="pilih" class="option">-Pilih-</option>
                          <option value="united states" class="option">United States</option>
                          <option value="united kingdom" class="option">United Kingdom</option>
                          <option value="viet nam" class="option">Viet Nam</option>
                        </select>
                        <i class="zmdi zmdi-chevron-down"></i>
                      </div>
                    </div>
                  </div>
                  <div class="actions clearfix">
                    <ul role="menu" aria-label="Pagination">
                      <li class="disabled" aria-disabled="flase">
                        <a href="identitas_pasien.html" role="menuitem">Back</a>
                      </li>
                      <li aria-hidden="false" aria-disabled="false">
                        <a href="status_pasien.html" role="menuitem">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>

                <!-- SECTION 3 -->
                
                
              </form>
            </div>
          </div>
        </div>
        <br>
        <br>

        
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
    <script src="../../dist/js/vendor.js"></script>
    <script src="../../dist/js/adminx.js"></script>

    <!-- datatables -->
    <script type="text/javascript" charset="utf8" src="../../dist/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
        $('#table_id').DataTable();
      } );
    </script>
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
      <script src="../dist/js/adminx.vanilla.js"></script-->
      </body>
      </html>