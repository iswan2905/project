@extends('layouts.template')
@section('content')
{{-- <div class="container">
<div class="row">
	<center><h1>Data Detail Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Detail Penjualan
		<div class="panel-title pull-right"><a href="{{ route('detailpenjualan.create') }}">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table" id="example">
				<thead>
					<tr>
						<th>Judul</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total Harga</th>
						<th>Tanggal Beli</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($detailpenjualan as $data)
					<tr>
						<td>{{$data->buku->judul}}</td>
						<td>Rp. {{$data->buku->harga}}</td>
						<td>{{$data->jumlah}}</td>
						<td>Rp. {{$data->total_harga}}</td>
						<td>{{$data->created_at}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('detailpenjualan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('detailpenjualan.destroy', $data->id)}}" method="POST">
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
                  <h5 class="card-title mb-4">Data Detail Penjualan</h5>
                  <div class="table-responsive">
                  	<center><a class="btn btn-outline-primary mr-2" href="{{ route('detailpenjualan.create') }}">Tambah Data</a></center>
                    <table class="table center-aligned-table" id="example">
                      <thead>
                        <tr class="text-primary">
                          <th>Nama Pelanggan</th>
                          <th>Alamat</th>
                          <th>Judul</th>
						  <th>Tanggal Transaksi</th>
						  <th>Edit</th>
						  <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($detailpenjualan as $data)
                        <tr class="">
                        <td>{{$data->nama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>@foreach($data->buku as $key => $value)<i  class="fa fa-arrow-right"></i>{{$value}} <br>@endforeach</td>
			{{-- 			<td>Rp. {{$data->total_harga}}</td> --}}
						<td>{{$data->created_at}}</td>
                          <td>
							<a class="btn btn-warning" href="{{route('detailpenjualan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('detailpenjualan.destroy', $data->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="Delete" class="btn btn-danger">
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