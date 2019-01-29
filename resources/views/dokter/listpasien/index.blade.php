@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>

	<section class="rekam-medis">
		<!-- <p><h1> List Antrian Pasien </h1></p> -->
		<p>
	</section>
	<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
                <th>Nama</th>
								<th>Nomor Telepon</th>
								<th>Alamat</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
								@php
								$i=1;
								@endphp
									@foreach($pasien_list as $pasien)
									<tr>
										<td>{{$i}}</td>
                    <td>{{ $pasien->name }}</td>
										<td>{{ $pasien->no_telp }}</td>
										<td>{{ $pasien->alamat_tinggal }}</td>
                    <td>
											<a href="{{route('ListPasien.show',['id'=>$pasien->id])}}" class="genric-btn primary small">Detail</a>
											
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
