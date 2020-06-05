

@extends('layout.main')

@section('title', $title)

@section('content')
<h2 class='mt-5' style='color:grey'>KRITERIA SPK</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<?php
if(session('status')){
echo "<div class='alert alert-success' role='alert'>".session('status')."</div>";
}
?>
<form method='post' action='/kriteria'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria</label>
    <input class="form-control @error('nama_krit') is-invalid @enderror" name="nama_krit" value="{{old('nama_krit')}}" style='font-size:12'>
	@error('nama_krit')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bobot Kriteria</label>
    <input class="form-control @error('bobot') is-invalid @enderror" name="bobot" value="{{old('bobot')}}" style='font-size:12'>
	@error('bobot')<div class="invalid-feedback">{{ $message }}</div>@enderror
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
      <th scope="col">Kriteria</th>
      <th scope="col">Bobot</th>
	  <th scope="col">Aksi</th>
	</tr>
  </thead>
  <tbody>
	@foreach($kriteria as $krit)
	<tr>
      <th scope='row'>{{$krit->id}}</th>
      <td>{{$krit->krit_nama}}</td>
      <td>{{$krit->krit_bobot}}</td>
	  <td>
	  <a href='/edit_kriteria/{{$krit->id}}' class='btn btn-success btn-sm'>Edit</a>
	  
	  <form action='/del_kriteria/{{$krit->id}}' method='post' class='d-inline'>
	  @csrf
	  <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
	  </form>
	  </td>
    </tr>
	<?php};?>
	@endforeach
</table>
</div>
</div>
</div>
</div>
@endsection

