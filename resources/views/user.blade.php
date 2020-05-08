

@extends('layout.main')

@section('title', $title)

@section('content')
<h2 class='mt-5' style='color:grey'>PENGATURAN USER</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<form method='post' action='/users'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input class="form-control" name="nama" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type='email' class="form-control" name="email" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input class="form-control" name="pwd" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jabatan</label>
    <select class="form-control" name="jabatan" style='font-size:12'>
      <option value='1'>Admin</option>
      <option value='2'>Kajur</option>
      <option value='3'>Kabag. Kemahasiswaan</option>
      <option value='4'>Pudir II</option>
    </select>
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
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
	  <th scope="col">Jabatan</th>
	  <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($user as $us){
	echo "<tr>
      <th scope='row'>".$us->user_id."</th>
      <td>".$us->user_nama."</td>
      <td>".$us->user_email."</td>
      <td>".$us->user_pwd."</td>
	  <td>".$us->user_jabatan."</td>
	  <td><a href='' class='badge badge-success'>Edit</a>
	  <a href='' class='badge badge-danger'>Delete</a></td>
    </tr>";} ?>
	</tbody>
</div>
</div>
</div>
</div>
@endsection
