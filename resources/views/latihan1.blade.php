@extends('layout.master')
@section('konten')
	
	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>

  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="kelas">
  </div>

  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="alamat">
  </div>

  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Lahir</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="tempat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>




@endsection