@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
	<section class= "form-keluhan">
		<h1> Form Pemeriksaan</h1>
    <!-- accordion 2 start-->
    <dl class="accordion">
        <dt>
            <a href="">Form Pemeriksaan Awal Kehamilan</a>
        </dt>
        <dd>
					@include('pasien.keluhan.form_pemeriksaan_awal')
        </dd>
        <dt>
            <a href="">Form Pemeriksaan Selanjutnya</a>
        </dt>
        <dd>
        			@foreach($periksas as $periksa)
					@include('pasien.keluhan.form_pemeriksaan_selanjutnya')
					@endforeach
        </dd>
    </dl>
	</section>
	<section class= "form-keluhan">
		<h1> Form Keluhan Kesehatan</h1>
    <form method="POST" action="{{ route('Periksa.store') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf

		<div class="form-group" name="deskripsi" id="deskripsi">
    		<label for="FormControlTextarea1">Masukan Keluhan Anda :</label>
        <textarea name="deskripsi" class="form-control" rows="5" placeholder="Masukkan Keluhan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
  	</div>
  		<button type="submit" class="genric-btn primary info">Submit</button>
	</form>
	</section>

	<section class="rekam-medis">
		<p><h1> Rekam Medis Anda </h1></p>
		<p>
	</section>
	<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>Keluhan</th>
								<th>Tanggal</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
								@php
								$i=1;
								@endphp
									@foreach($keluhan_list as $keluhan)
									<tr>
										<td>{{$i}}</td>
										<td>{{ $keluhan->deskripsi }}</td>
										<td>{{ $keluhan->tanggal }}</td>
										<td><a href="{{route('Periksa.show',['id'=>$keluhan->id_keluhan])}}" class="genric-btn primary small">Detail</a></a></td>
									</tr>
								@php
								$i++;
								@endphp
							@endforeach

						</tbody>
					</table>
				</div>
</body>
</html>
@stop
