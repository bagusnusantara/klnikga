@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
	<section class= "form-keluhan">
		<h1> Detail Rekam Medis</h1>
    <!-- accordion 2 start-->
    <dl class="accordion">
				<dt>
            <a href="">Detail Tabel Pemeriksaan</a>
        </dt>
        <dd>

						@include('pasien.rekammedis.show_pemeriksaan')
        </dd>
				@can('isDokter')
				<dt>
            <a href="">Isi Tabel Poedji Rochjati</a>
        </dt>
        <dd>
						@include('dokter.pemeriksaan_fisik.form_tp')
        </dd>
				@endcan
				<dt>
            <a href="">Detail Tabel Skor Poedji Rochjati</a>
        </dt>
        <dd>
						@include('pasien.rekammedis.show_tp')
        </dd>
				<dt>
            <a href="">Foto</a>
        </dt>
        <dd>
						@include('pasien.rekammedis.show_foto')
        </dd>
    </dl>
    <!-- accordion 2 end-->
	</section>

</body>
</html>
@stop
