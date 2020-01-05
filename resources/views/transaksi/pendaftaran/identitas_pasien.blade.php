<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Pasien - SIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="../../fonts/material-design-iconic-font/css/material-design-iconic-font.css">

  <!-- DATE-PICKER -->
  <link rel="stylesheet" href="../../vendor/date-picker/css/datepicker.min.css">
  <!-- fevicon -->
  <link rel="icon" href="../../img/logo.png" type="image/gif" />
  <link rel="stylesheet" type="text/css" href="../../dist/css/adminx.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../dist/css/style.css" media="screen" />

  
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
              <h4></h4>
              <section>
                <h3>Data Pasien Baru</h3>
                <div class="form-row">
                  <div class="form-col">
                    <label for="">
                      Tanggal Daftar
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-calendar"></i>
                      <input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1" disabled>
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      NIK
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-search"></i>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      No Rekmed Lama
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-assignment"></i>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      No Kartu Keluarga
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-collection-text"></i>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Nama Lengkap<span class="text-danger">*</span>
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-account"></i>
                      <input type="text" class="form-control" name="nama_lengkap">
                      <!-- <span class="text-danger"><?php echo form_error('nama_lengkap');?></span> -->
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Nama Kepala Keluarga
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-account"></i>
                      <input type="text" class="form-control">
                    </div>
                  </div> 
                  <div class="form-col">
                    <label for="">
                      Tempat Lahir<span class="text-danger">*</span>
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-pin"></i>
                      <input type="text" class="form-control" name="tempat_lahir">
                      <!-- <span class="text-danger"><?php echo form_error('tempat_lahir');?></span> -->
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Kel/Jenis Pasien<span class="text-danger">*</span>
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-balance-wallet"></i>
                      <select name="jenis_pasien" id="" class="form-control">
                        <option value="pilih" class="option">-Pilih-</option>
                        <option value="umum" class="option">UMUM</option>
                        <option value="jkn_bpjs" class="option">JKN-BPJS</option>
                        <option value="jamkesda" class="option">JAMKESDA</option>
                        <option value="bpjs_ketenagakerjaan" class="option">BPJS-KETENAGAKERJAAN</option>
                      </select>
                      <i class="zmdi zmdi-chevron-down"></i>
                    </div>
                    <!-- <span class="text-danger"><?php echo form_error('jenis_pasien');?></span> -->
                  </div>
                  <div class="form-col">
                    <label for="">
                      Tanggal Lahir<span class="text-danger">*</span>
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-calendar"></i>
                      <input type="text" name="tgl_lahir" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp2">
                      <!-- <span class="text-danger"><?php echo form_error('tgl_lahir');?></span> -->
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Jenis Pembayaran<span class="text-danger">*</span>
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-card"></i>
                      <select name="jenis_pembayaran" id="" class="form-control">
                        <option value="pilih" class="option">-Pilih-</option>
                        <option value="umum" class="option">UMUM</option>
                        <option value="jkn_bpjs" class="option">JKN-BPJS</option>
                        <option value="jamkesda" class="option">JAMKESDA</option>
                        <option value="bpjs_ketenagakerjaan" class="option">BPJS-KETENAGAKERJAAN</option>
                      </select>
                      <i class="zmdi zmdi-chevron-down"></i>
                      <!-- <span class="text-danger"><?php echo form_error('jenis_pembayaran');?></span> -->
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Jenis Kelamin<span class="text-danger">*</span>
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-male-female"></i>
                      <select name="jenis_kel" id="" class="form-control">
                        <option value="pilih" class="option">-Pilih-</option>
                        <option value="perempuan" class="option">Perempuan</option>
                        <option value="laki" class="option">Laki-Laki</option>
                      </select>
                      <i class="zmdi zmdi-chevron-down"></i>
                      <!-- <span class="text-danger"><?php echo form_error('jenis_kel');?></span> -->
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Keterangan Wilayah
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-pin-drop"></i>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-col">
                    <label for="">
                      Umur
                    </label>
                    <div class="form-holder">
                      <i class="zmdi zmdi-account-o"></i>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="actions clearfix">
                  <ul role="menu" aria-label="Pagination">
                    <li class="disabled" aria-disabled="true">
                      <a href="#previous" role="menuitem">Back</a>
                    </li>
                    <li aria-hidden="false" aria-disabled="false">
                      <a href="alamat_pasien.html" role="menuitem">Next</a>
                    </li>
                  </ul>
                </div>
              </section>

              <!-- SECTION 2 -->
              

              <!-- SECTION 3 -->
              
            </form>
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

    <!-- // Main Content -->
  </div>
  <!-- If you prefer jQuery these are the required scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="../../dist/js/vendor.js"></script>
  <script src="../../dist/js/adminx.js"></script>

  <!-- DATE-PICKER -->
  <script src="../../vendor/date-picker/js/datepicker.js"></script>
  <script src="../../vendor/date-picker/js/datepicker.en.js"></script>

</body>
</html>