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
			<form action="{{route('buku.update', $buku->id)}}" method="POST"  files="true" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Judul</label>
					<input type="text" name="a" value="{{$buku->judul}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Penulis</label>
					<input type="text" name="b" value="{{$buku->penulis}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Stok</label>
					<input type="number" name="c" value="{{$buku->stok}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Harga</label>
					<input type="text" name="d" value="{{$buku->harga}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="file" name="cover" value="{{$buku->cover}}" class="form-control" required="">
					
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div> --}}
<div class="card-body">
                  <h5 class="card-title mb-4">Tambah Data Buku</h5>
                  <form action="{{route('buku.update', $buku->id)}}" method="POST" files="true" enctype="multipart/form-data">
                  	<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  	<div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control p-input" value="{{$buku->judul}}" name="a">
                    </div>
                    <div class="form-group">
                      <label>Penulis</label>
                      <input type="text" class="form-control p-input" name="b" value="{{$buku->penulis}}">
                    </div>
                    <div class="form-group">
                      <label>Stok</label>
                      <input type="text" class="form-control p-input" name="c" value="{{$buku->stok}}">
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control p-input" name="d" value="{{$buku->harga}}">
                    </div>
                    <div class="form-group">
                      <label>Cover</label>
                      <input type="file" class="form-control p-input" name="cover" value="{{$buku->cover}}">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </form>
                </div>
</div>
</div>
@endsection