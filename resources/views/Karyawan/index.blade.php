@extends('layouts.template')
@section('content')
<div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Data Karyawan</h5>
                  <div class="table-responsive">
                  	<center><a class="btn btn-outline-primary mr-2" href="{{ route('Karyawan.create') }}">Tambah Data</a></center>
                    <table class="table center-aligned-table" id="example">
                      <thead>
                        <tr class="text-primary">
                          <th>#</th>
						              <th>Nama Karyawan</th>
						              <th>Email</th>
						              <th>Edit</th>
						              <th>Delete</th>
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
                          <td>
							<a class="btn btn-outline-warning" href="{{route('Karyawan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('Karyawan.destroy', $data->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="Delete" class="btn btn-outline-danger">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection