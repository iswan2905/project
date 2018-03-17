@extends('layouts.template')
@section('content')
{{-- <div class="container">
<div class="row">
	<center><h1>Data Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Penjualan
		<div class="panel-title pull-right"><a href="{{ route('penjualan.create') }}">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table" id="example">
				<thead>
					<tr>
						<th>Pelanggan</th>
						<th>Judul</th>
						<th>Tanggal Jual</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($penjualan as $data)
					<tr>
						<td>{{$data->pelanggan->nama}}</td>
						<td>{{$data->buku->judul}}</td>
						<td>{{$data->tgl_jual}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('penjualan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('penjualan.destroy', $data->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="Delete" class="btn btn-danger">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div> --}}
<div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Data Penjualan</h5>
                  <div class="table-responsive">
                  	<center><a class="btn btn-outline-primary mr-2" href="{{ route('penjualan.create') }}">Tambah Data</a></center>
                    <table class="table center-aligned-table" id="example">
                      <thead>
                        <tr class="text-primary">
                          <th>Pelanggan</th>
						  <th>Judul</th>
						  <th>Tanggal Jual</th>
						  <th>Edit</th>
						  <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($penjualan as $data)
                        <tr class="">
                          <td>{{$data->pelanggan->nama}}</td>
						  <td>{{$data->buku->judul}}</td>
						  <td>{{$data->tgl_jual}}</td>
                          <td>
							<a class="btn btn-outline-warning" href="{{route('penjualan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('penjualan.destroy', $data->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="Delete" class="btn btn-outline-danger">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection