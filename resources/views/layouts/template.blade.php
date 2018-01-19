<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Assalaam Book Store</title>
  <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('images/hjhj.png')}}" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('images/logo_star_mini.jpg')}}" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{ asset('images/foto.jpg')}}" alt="">

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{ asset('images/foto.jpg')}}" alt="">
            <p class="name">Iswan</p>
            <p class="designation">Admin</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home')}}">
                <img src="{{ asset('images/icons/dasboard.png')}}" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            @endif
            @role('admin')
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pelanggan.index')}}">
                <img src="{{ asset('images/icons/customer.png')}}" alt="">
                <span class="menu-title">Pelanggan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('penjualan.index')}}">
                <img src="{{ asset('images/icons/money.png')}}" alt="">
                <span class="menu-title">Penjualan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('buku.index')}}">
                <img src="{{ asset('images/icons/book.png')}}" alt="">
                <span class="menu-title">Buku</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('detailpenjualan.index')}}">
                <img src="{{ asset('images/icons/atm.png')}}" alt="">
                <span class="menu-title">Detail Penjualan</span>
              </a>
            </li>
            @endrole
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          @yield('content')
          <div class="row">
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Iswan XII RPL 3</a> &copy; 2018
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="{{ asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{ asset('js/off-canvas.js')}}"></script>
  <script src="{{ asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('js/misc.js')}}"></script>
  <script src="{{ asset('js/chart.js')}}"></script>
  <script src="{{ asset('js/maps.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <script>
      $(document).ready(function() {
    $("#example").DataTable({
    });
} );
</script>
</body>

</html>
