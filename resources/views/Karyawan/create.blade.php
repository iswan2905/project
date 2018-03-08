@extends('layouts.template')
@section('content')
<div class="card-body">
                  <h5 class="card-title mb-4">Tambah Data Karyawan</h5>
                  <form action="{{route('Karyawan.store')}}" method="POST">
                  	{{csrf_field()}}
                  	<div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control p-input" name="name">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control p-input" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control p-input" name="password">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </form>
                </div>
@endsection