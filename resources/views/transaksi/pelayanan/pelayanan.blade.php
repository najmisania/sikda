<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pelayanan Pasien - SIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fevicon -->
  <link rel="icon" href="../../img/logo.png" type="image/gif" />
  <link rel="stylesheet" type="text/css" href="../../dist/css/adminx.css" media="screen" />
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
              <a href="../pendaftaran/index_pendaftaran.html" class="sidebar-nav-link">
                <span class="sidebar-nav-abbr">
                  PD
                </span>
                <span class="sidebar-nav-name">
                  Pendaftaran
                </span>
              </a>
            </li>

            <li class="sidebar-nav-item">
              <a href="pelayanan.html" class="sidebar-nav-link">
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
    <div class="adminx-content">
      <div class="adminx-main-content">
        <div class="container-fluid">
          <!-- BreadCrumb -->
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb adminx-page-breadcrumb">
              <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</a></li>
              <li class="breadcrumb-item active"  aria-current="page">Pendaftaran</li>
            </ol>
          </nav>

          <div class="pb-3">
            <h1>Data Pelayanan Pasien</h1>
          </div>
          <form>
            <div class="row">
              <div class="col"> 
                <input class="form-control" type="text" placeholder="NO ANTRIAN">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="TANGGAL">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="DESA/KEL">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="REK MEDIS">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="NAMA">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="JENIS PASIEN">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="UNIT PASIEN">
              </div>
              <div class="col"> 
                <input class="form-control" type="text" placeholder="STATUS">
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>

          <br>
          <div class="row">
            <div class="col">      
              <div class="card mb-grid">
                <div class="table-responsive-md">
                 <table id="table_id" class="display">
                  <thead>
                    <tr>
                      <th width="10%"class="text-center">NOMOR ANTRIAN</th>
                      <th width="10%"class="text-center">TANGGAL</th>
                      <th width="9%"class="text-center">DESA/KELURAHAN</th>
                      <th width="12%"class="text-center">REK MEDIS</th>
                      <th width="17%"class="text-center">NAMA</th>
                      <th width="13%"class="text-center">JENIS PASIEN</th>
                      <th width="9%"class="text-center">UNIT LAYANAN</th>
                      <th width="10%"class="text-center">STATUS</th>
                      <th width="15%"class="text-center">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Row 1 Data 1</td>
                      <td>Row 1 Data 2</td>
                      <td>Row 1 Data 3</td>
                      <td class="text-center">bambang</td>
                      <td class="text-center">Row 1 Data 5</td>
                      <td class="text-center">Row 1 Data 6</td>
                      <td class="text-center">Row 1 Data 6</td>
                      <td class="text-center">Row 1 Data 6</td>
                      <td>

                       <a href="" class="btn btn-primary btn-sm"><i data-feather="edit"></i></a>
                       <a href="" class=" btn btn-danger btn-sm"><i data-feather="trash"></i></a>
                     </td>
                   </tr>
                   <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 3</td>
                    <td class="text-center">Row 2 Data 4</td>
                    <td class="text-center">Row 2 Data 5</td>
                    <td class="text-center">Row 2 Data 6</td>
                    <td class="text-center">Row 2 Data 6</td>
                    <td class="text-center">Row 2 Data 6</td>
                    <td>

                     <a href="" class="btn btn-primary btn-sm"><i data-feather="edit"></i></a>
                     <a href="" class=" btn btn-danger btn-sm"><i data-feather="trash"></i></a></td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- // Main Content -->
</div>
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