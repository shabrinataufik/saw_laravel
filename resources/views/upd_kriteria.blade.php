

@extends('layout.main')

@section('title', 'UPDATE KRITERIA')

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
<form method='post' action='/upd_kriteria/{{$krit->id}}'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria</label>
    <input class="form-control" name="nama_krit" style='font-size:12' value='{{$krit->krit_nama}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bobot Kriteria</label>
    <input class="form-control" name="bobot" style='font-size:12' value='{{$krit->krit_bobot}}'>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<div class='col-1'>
</div>
<div class='col-8'>
<div class='container mt-3'>

</div>
</div>
</div>
</div>
@endsection

