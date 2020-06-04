

@extends('layout.main')

@section('title', $title)

@section('content')
<h2 class='mt-5' style='color:grey'>SKOR MAHASISWA</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<?php
if(session('status')){
echo "<div class='alert alert-success' role='alert'>".session('status')."</div>";
}
?>
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
    <label for="exampleInputEmail1">Kriteria 1 (C1)</label>
    <input class="form-control" name="krit1" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 2 (C2)</label>
    <input class="form-control" name="krit2" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 3 (C3)</label>
    <input class="form-control" name="krit3" style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 4 (C4)</label>
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
      <th scope="col">C1</th>
	  <th scope="col">C2</th>
	  <th scope="col">C3</th>
	  <th scope="col">C4</th>
	  <th scope="col">Aksi</th>
	</tr>
  </thead>
  <tbody>
	@foreach($skor as $sk)
	<tr>
      <th scope='row'><?php echo $sk->id ?></th>
      <td><?php echo $sk->skor_nama ?></td>
      <td><?php echo $sk->skor_jurusan ?></td>
      <td><?php echo $sk->skor_kriteria1 ?></td>
	  <td><?php echo $sk->skor_kriteria2 ?></td>
	  <td><?php echo $sk->skor_kriteria3 ?></td>
	  <td><?php echo $sk->skor_kriteria4 ?></td>
	  <td><form action='/skor/<?php echo $sk->id; ?>' method='fetch' class='d-inline'>
	  @csrf
	  <button type='submit' class='btn btn-success btn-sm'>Edit</button>
	  </form>
	  <form action='/del_skor/<?php echo $sk->id; ?>' method='post' class='d-inline'>
	  @csrf
	  <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
	  </form></td>
    </tr>
	@endforeach
	</tbody>
</div>
</div>
</div>
</div>
@endsection

