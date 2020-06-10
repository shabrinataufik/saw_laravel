

@extends('layout.main')

@section('title', $title)

@section('content')
<div class="container">
<h2 class="mt-5" style="color:grey">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN MAHASISWA BERPRESTASI</h2>
	<div class="row">
		<div class="col-8">
			<a href="/saw" class="btn btn-primary mt-5">Hitung Skor Mahasiswa</a>
	
			</br>
			<table style='font-size:12px' class="table table-striped mt-3">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Nama Mahasiswa</th>
				  <th scope="col">Jurusan</th>
				  <th scope="col">C1</th>
				  <th scope="col">C2</th>
				  <th scope="col">C3</th>
				  <th scope="col">C4</th>
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
				</tr>
				@endforeach
				</tbody>
			</table>
			</br>
			<a href="/skor" class="btn btn-success">Ubah Data >></a>
		</div>
		<div class="col-3">
			@if(null!==@$saw)
			<div class="card mt-4 ml-5" style="width: 18rem;">
			  <div class="card-body">
				<h5 class="card-title">Skor Mahasiswa</h5>
				<?php 
					for($i=0; $i<$rows; $i++){
				?>
					<p class="card-text">
					<?php	
						echo $saw[$i][0]." : ".$saw[$i][1];
					?>
					</p>
				<?php } ?>
					<p class="card-text">
						Mahasiswa yang terpilih sebagai Mahasiswa Berprestasi Universitas Angkasa adalah <b>{{$result}}</b>.
					</p>
			  </div>
			</div>
			@endif
			<div class="card mt-4 ml-5" style="width: 18rem;">
			  <div class="card-body">
				<p class="card-text">Ini adalah aplikasi Sistem Pendukung Keputusan (SPK) Pemilihan Mahasiswa Berprestasi di Universitas Angkasa. Klik "HItung Skor Mahasiswa" untuk menghitung skor mahasiswa dan memilih mahasiswa terbaik. Klik "Ubah Data" menambah, mengubah, atau menghapus data skor mahasiswa.</p>
				<a href="/about" class="card-link">About</a>
			  </div>
			</div>
		</div>
	<div>
</div>		
@endsection

