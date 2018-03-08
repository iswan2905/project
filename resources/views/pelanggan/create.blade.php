@extends('layouts.template')
@section('content')
{{-- <div class="container">
<div class="row">
	<center><h1>Data Pelanggan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Pelanggan
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('pelanggan.store')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">No Telp</label>
					<input type="text" name="d" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Email</label>
					<input type="text" name="b" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" rows="10" name="c" required=""></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div> --}}
<div class="card-body">
                  <h5 class="card-title mb-4">Tambah Data Pelanggan</h5>
                  <form action="{{route('pelanggan.store')}}" method="POST">
                  	{{csrf_field()}}
                  	<div class="form-group">
                      <label>Nama Pelanggan</label>
                      <input type="text" class="form-control p-input" name="a" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control p-input" name="b" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>No. Telp</label>
                      <input type="text" class="form-control p-input" name="d" placeholder="Ketik Nomor Telepon">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control p-input" name="c" rows="5" placeholder="Ketikkan Alamat..."></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </form>
                </div>
@endsection