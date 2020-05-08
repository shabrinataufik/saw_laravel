

@extends('layout.main')

@section('title', $title)

@section('content')
<h2 class='mt-5' style='color:grey'>SKOR MAHASISWA</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<form method='post' action='/skor'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input class="form-control" name="nama" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jurusan</label>
    <select class="form-control" name="jurusan" style='font-size:12'>
      <option value='1'>Akuntansi</option>
      <option value='2'>Administrasi Niaga</option>
      <option value='3'>Teknik Elektro</option>
      <option value='4'>Teknik Informatika</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 1</label>
    <input class="form-control" name="krit1" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 2</label>
    <input class="form-control" name="krit2" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 3</label>
    <input class="form-control" name="krit3" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 4</label>
    <input class="form-control" name="krit4" style='font-size:12'>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class='col-1'>
</div>
<div class='col-8'>
<div class='container mt-3'>

<table style='font-size:12px' class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Kriteria 1</th>
	  <th scope="col">Kriteria 2</th>
	  <th scope="col">Kriteria 3</th>
	  <th scope="col">Kriteria 4</th>
	  <th scope="col">Aksi</th>
	</tr>
  </thead>
  <tbody>
	<?php foreach($skor as $sk){
	echo "<tr>
      <th scope='row'>".$sk->skor_id."</th>
      <td>".$sk->skor_nama."</td>
      <td>".$sk->skor_jurusan."</td>
      <td>".$sk->skor_kriteria1."</td>
	  <td>".$sk->skor_kriteria2."</td>
	  <td>".$sk->skor_kriteria3."</td>
	  <td>".$sk->skor_kriteria4."</td>
	  <td><a href='' class='badge badge-success'>Edit</a>
	  <a href='' class='badge badge-danger'>Delete</a></td>
    </tr>";} ?>
	</tbody>
</div>
</div>
</div>
</div>
@endsection

