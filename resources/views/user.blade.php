

@extends('layout.main')

@section('title', $title)

@section('content')
<h2 class='mt-5' style='color:grey'>PENGATURAN USER</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<?php
if(session('status')){
echo "<div class='alert alert-success' role='alert'>".session('status')."</div>";
}
?>
<form method='post' action='/users'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}" style='font-size:12'>
  @error('nama')
    <div class="invalid-feedback">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" style='font-size:12'>
  @error('email')
    <div class="invalid-feedback">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input class="form-control @error('pwd') is-invalid @enderror" name="pwd" value="{{old('pwd')}}" style='font-size:12'>
  @error('pwd')
    <div class="invalid-feedback">{{$message}}</div>
  @enderror
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
	@foreach($user as $us)
	<tr>
      <th scope='row'><?php echo $us->id; ?></th>
      <td><?php echo $us->user_nama; ?></td>
      <td><?php echo $us->user_email; ?>"</td>
      <td><?php echo $us->user_pwd; ?></td>
	  <td><?php echo $us->user_jabatan; ?></td>
	  <td><a href='/edit_user/{{$us->id}}' class='btn btn-success btn-sm'>Edit</a>
	  <form action='/del_user/{{$us->id}}' method='post' class='d-inline'>
	  @csrf
	  <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
	  </form></td>
    </tr>
	@endforeach
	</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection

