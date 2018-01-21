@extends('layout.master')
@section('konten')
	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="isi">
  </div>

  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="isi">
  </div>

  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Transfer</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="isi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Tranfer</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
    
    <form class="form-inline">
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Tranfer</label>
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-primary">Transfer cash</button>

</form>

@endsection