@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Penjualan
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('penjualan.update', $penjualan->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<select class="form-control" name="a">
						@foreach($pelanggan as $data)
						<option value="{{$data->id}}">{{$data->nama}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Tanggal Jual</label>
					<input type="text" name="b" value="{{$penjualan->tgl_jual}}" class="form-control" required="">
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