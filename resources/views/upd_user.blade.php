 

@extends('layout.main')

@section('title', 'Update User')

@section('content')
<h2 class='mt-5' style='color:grey'>UPDATE DATA USER</h2>
</br>
<div class='container mt-3'>
<div class='row'>
<div class='col-3' style='font-size:12'>
<?php
if(session('status')){
echo "<div class='alert alert-success' role='alert'>".session('status')."</div>";
}
?>
<form method='post' action='/upd_user/{{$user->id}}'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input class="form-control" name="nama" value='{{$user->user_nama}}' style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type='email' class="form-control" name="email" value='{{$user->user_email}}' style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input class="form-control" name="pwd" value='{{$user->user_pwd}}' style='font-size:12'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jabatan</label>
    <select class="form-control" name="jabatan" style='font-size:12'>
      <option value='1' <?php if($user->user_jabatan=='Admin'){echo "selected";} ?>>Admin</option>
      <option value='2' <?php if($user->user_jabatan=='Kajur'){echo "selected";} ?>>Kajur</option>
      <option value='3' <?php if($user->user_jabatan=='Kabag. Kemahasiswaan'){echo "selected";} ?>>Kabag. Kemahasiswaan</option>
      <option value='4' <?php if($user->user_jabatan=='Pudir II'){echo "selected";} ?>>Pudir II</option>
    </select>
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

