@extends('layouts.template')
@section('content')
<div class="container">
{{-- <div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('buku.store')}}" method="POST" files="true" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Judul</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Penulis</label>
					<input type="text" name="b" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Stok</label>
					<input type="text" name="c" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Harga</label>
					<input type="text" name="d" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="file" name="cover"  required="">
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
                  <h5 class="card-title mb-4">Tambah Data Buku</h5>
                  <form action="{{route('buku.store')}}" method="POST">
                  	{{csrf_field()}}
                  	<div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control p-input" name="a" placeholder="Ketik Disini...">
                    </div>
                    <div class="form-group">
                      <label>Penulis</label>
                      <input type="text" class="form-control p-input" name="b" placeholder="Ketik Disini...">
                    </div>
                    <div class="form-group">
                      <label>Stok</label>
                      <input type="text" class="form-control p-input" name="c" placeholder="Ketik Disini...">
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control p-input" name="d" placeholder="Ketik Disini...">
                    </div>
                    <div class="form-group">
                      <label>Cover</label>
                      <input type="file" class="form-control p-input" name="cover" placeholder="Masukkan File">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </form>
                </div>
</div>
@endsection