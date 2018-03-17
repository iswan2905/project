<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ERROR 403</title>
  <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center text-center error-page">
          <div class="col-lg-6 mx-auto">
            <h1 class="display-1 mb-0">403</h1>
            <h2 class="mb-4">No Access!</h2>
            <p>Keknya kamu gak punya hak akses deh kesini...</p>
            <a class="btn btn-primary mt-5 btn-rounded btn-lg" href="{{ url('/home')}}">Kembali Ke Halaman Awal</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{ asset('js/misc.js')}}"></script>
</body>

</html>
