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
@endsection
