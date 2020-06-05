@extends('layout.main')

@section('title', 'Update Skor')

@section('content')
<h2 class='mt-5' style='color:grey'>UPDATE DATA SKOR MAHASISWA</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<?php
if(session('status')){
echo "<div class='alert alert-success' role='alert'>".session('status')."</div>";
}
?>
<form method='post' action='/upd_skor/{{$skor->id}}'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input class="form-control" name="nama" style='font-size:12' value='{{$skor->skor_nama}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jurusan</label>
    <select class="form-control" name="jurusan" style='font-size:12'>
      <option value='1' <?php if($skor->skor_jurusan=='Akuntansi'){echo 'selected';} ?>>Akuntansi</option>
      <option value='2' <?php if($skor->skor_jurusan=='Administrasi Niaga'){echo 'selected';} ?>>Administrasi Niaga</option>
      <option value='3' <?php if($skor->skor_jurusan=='Teknik Elektro'){echo 'selected';} ?>>Teknik Elektro</option>
      <option value='4' <?php if($skor->skor_jurusan=='Teknik Informatika'){echo 'selected';} ?>>Teknik Informatika</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 1 (C1)</label>
    <input class="form-control" name="krit1" style='font-size:12' value='{{$skor->skor_kriteria1}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 2 (C2)</label>
    <input class="form-control" name="krit2" style='font-size:12' value='{{$skor->skor_kriteria2}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 3 (C3)</label>
    <input class="form-control" name="krit3" style='font-size:12' value='{{$skor->skor_kriteria3}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kriteria 4 (C4)</label>
    <input class="form-control" name="krit4" style='font-size:12' value='{{$skor->skor_kriteria4}}'>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
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

