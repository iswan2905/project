@extends('layouts.template')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assalaam Book Store</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Anda Berhasil Login!</p>

                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title mb-5">Dashboard</h5>
                  <p class="lead">
                    <h6>Hi! {{Auth::user()->name}}<br></h6>
                    Anda Berhasil Login!<br>
                    Selamat Datang di Halaman Dashboard Assalaam Book Store.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-deck">
          <div class="card col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Daftar Karyawan</h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr class="text-primary">
                          <th>No. </th>
                          <th>Nama Karyawan</th>
                          @role('admin')
                          <th>Email</th>
                          @endrole
                        </tr>
                      </thead>

                      <?php
                      $no = 1;
                      ?>

                      <tbody>
                        @foreach($karyawan as $data)
                        <tr class="">
                          <td>{{$no++}}</td>
                          <td>{{$data->name}}</td>
                          @role('admin')
                          <td>{{$data->email}}</td>
                          @endrole
          </tr>
            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="card col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4" style="min-height:395px;">
              <div class="card-body">
                <h5 class="card-title mb-4">Quote</h5>
                <div class="row d-flex align-items-center justify-items-center flex-column">
                  <div class="text-center">
                    <img src="{{ asset('images/foto.jpg')}}" class="rounded-circle" width="100" height="100">
                  </div>
                  <div class="text-center mt-3">
                    <i class="fa fa-quote-right icon-grey-big"></i>
                  </div>
                  <p class="font-italic text-muted mt-3 mb-4 text-center">
                    Be happy with being you. Love your flaws. Own your quirks. And know that you are just as perfect as anyone else, exactly as you are.
                    <center>-Ariana Grande-</center>
                  </p>
                  <h5 class="text-center bolder">Iswan</h5>
                  <h6 class="text-center text-muted">Owner</h6>
                </div>
              </div>
            </div>
            </div>
@endsection
