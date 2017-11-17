<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('img/apple-icon.png') ?>" />
  <link rel="icon" type="image/png" href="<?= asset('img/favicon.png') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Polinema For Nation</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <!-- Bootstrap core CSS -->
  <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet" />
  <!--  Material Dashboard CSS    -->
  <link href="<?= asset('css/material-dashboard.css?v=1.2.0') ?>" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

  {{-- Datatables --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
<div class="wrapper">
  <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text">
        Polinema For Nation
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li>
          <a href="{{ url('/admin') }}">
            <i class="material-icons">dashboard</i>
            <p>Beranda</p>
          </a>
        </li>

        <li>
          <a href="{{ url('/admin/kategori') }}">
            <i class="material-icons">label</i>
            <p>Kategori</p>
          </a>
        </li>

        <li>
          <a href="{{ url('/admin/buku') }}">
            <i class="material-icons">book</i>
            <p>Buku</p>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="material-icons">email</i>
            <p>Pesan</p>
          </a>
        </li>

        <li>
          <a href="{{ url('/admin/petugas') }}">
            <i class="material-icons">supervisor_account</i>
            <p>Petugas</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>@yield('pageTitle')</b></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">notifications</i>
                <span class="notification">5</span>
                <p class="hidden-lg hidden-md">Notifications</p>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Mike John responded to your email</a>
                </li>
                <li>
                  <a href="#">You have 5 new tasks</a>
                </li>
                <li>
                  <a href="#">You're now friend with Andrew</a>
                </li>
                <li>
                  <a href="#">Another Notification</a>
                </li>
                <li>
                  <a href="#">Another One</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">account_circle</i>
                <span><b>{{ auth()->guard('petugas')->user()->nama }}</b></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ url('/logout') }}">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <p class="copyright text-center">
          copyright &copy;
          <script>
              document.write(new Date().getFullYear())
          </script>
          <a href="http://www.google.com">Polinema For Nation</a>
        </p>
      </div>
    </footer>
  </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?= asset('js/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= asset('js/material.min.js') ?>" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?= asset('js/chartist.min.js') ?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?= asset('js/arrive.min.js') ?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?= asset('js/perfect-scrollbar.jquery.min.js') ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?= asset('js/bootstrap-notify.js') ?>"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= asset('js/material-dashboard.js?v=1.2.0') ?>"></script>

{{-- Datatables --}}
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({
            "lengthChange": false,
            "language": {
                "search": "",
                "searchPlaceholder": "Pencarian",
                "emptyTable": "Data Masih Kosong",
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 hingga 0 dari 0 data",
                "paginate": {
                    "first":      "First",
                    "last":       "Last",
                    "next":       "Selanjutnya",
                    "previous":   "Sebelumnya"
                },
                "infoFiltered": "",
                "zeroRecords": "Data tidak ditemukan"
            }
        });
    });
</script>

</html>