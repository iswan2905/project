@extends('layouts.template')
@section('content')
{{-- <div class="container">
<div class="row">
	<center><h1>Data Pelanggan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">
		<div class="panel-title pull-right"><a href="{{ route('pelanggan.create') }}">Tambah Data</a></div>
		</div>
		<div class="row mb-2">
				<div class="col-lg-14 mb-12">
					<div class="card">
						<div class="card-body">
			<table class="table center-aligned-table" id="example">
				<thead>
					<tr class="table-primary">
						<th>Nama</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>No. Telp</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pelanggan as $data)
					<tr class="table-success">
						<td>{{$data->nama}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->no_telp}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('pelanggan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('pelanggan.destroy', $data->id)}}" method="POST">
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
		</div>
		</div>
	</div>
</div>
</div> --}}
<div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Data Pelanggan</h5>
                  <div class="table-responsive">
                  	<center><a class="btn btn-outline-primary mr-2" href="{{ route('pelanggan.create') }}">Tambah Data</a></center>
                    <table class="table center-aligned-table" id="example">
                      <thead>
                        <tr class="text-primary">
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>No. Telp</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($pelanggan as $data)
                        <tr class="">
                          <td>{{$data->nama}}</td>
                          <td>{{$data->email}}</td>
						  <td>{{$data->alamat}}</td>
						  <td>{{$data->no_telp}}</td>
                          <td>
							<a class="btn btn-warning" href="{{route('pelanggan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('pelanggan.destroy', $data->id)}}" method="POST">
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