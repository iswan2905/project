@extends('layouts.template')
@section('content')
<div class="container">
{{-- <div class="row">
	<center><h1>Data Detail Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Detail Penjualan
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			@include('layouts._flash')
			<form action="{{route('detailpenjualan.store')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama Pelanggan</label>
					<input type="text" name="d" class="form-control" required="">
				</div>
				<div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control p-input" name="e" rows="5" placeholder="Ketikkan Alamat..."></textarea>
                 </div>				
                 <div class="form-group">
					<label class="control-lable">Buku</label>
					<select class="js-example-basic-multiple" name="id_buku" multiple="multiple">
						@foreach($buku as $data)
						<option value="{{$data->id}}">{{$data->judul}}</option>
						@endforeach
					</select>
				</div>
				
				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="text" name="c" class="form-control" required="">
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
                  <h5 class="card-title mb-4">Tambah Data Detail Penjualan</h5>
                  <form action="{{route('detailpenjualan.store')}}" method="POST">
                  	{{csrf_field()}}
                  	<div class="form-group">
                      <label>Nama Pelanggan</label>
                      <input type="text" class="form-control p-input" name="d" placeholder="Ketik Disini...">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control p-input" name="e" rows="5" placeholder="Ketikkan Alamat..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Transaksi</label>
                      <input type="text" class="form-control p-input datepicker" name="f">
                    </div>
                    <div class="form-group">
                      <label>Metode Pembayaran</label>
                      <select class="form-control" name="g">
						<option value="Cash">Cash</option>
						<option value="Credit Card">Credit Card</option>
						<option value="Internet Banking">Internet Banking</option>
						<option value="Cash on Delivery">Cash on Delivery</option>
						<option value="Debit Card">Debit Card</option>
					</select>
                    </div>
                    <div class="form-group">
					<label class="control-lable">Buku</label>
					<select class="js-example-basic-multiple form-control" name="id_buku[]" multiple="multiple">
						@foreach($buku as $data)
						<option value="{{$data->id}}">{{$data->judul}} - Rp.{{number_format($data->harga,'2',',','.')}}</option>
						@endforeach
					</select>
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