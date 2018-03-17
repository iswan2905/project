@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('Karyawan.update', $karyawan->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Username</label>
					<input type="text" name="name" value="{{$karyawan->name}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Email</label>
					<input type="email" name="email" value="{{$karyawan->email}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Password</label>
					<input type="text" name="password" value="{{$karyawan->password}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection