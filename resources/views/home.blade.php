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
                    Anda Berhasil Login!
                    Selamat Datang di Halaman Dashboard Assalaam Book Store.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Daftar Karyawan</h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr class="text-primary">
                          <th>No. </th>
              <th>Username</th>
              <th>Email</th>
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
            <td>{{$data->email}}</td>
          </tr>
          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
