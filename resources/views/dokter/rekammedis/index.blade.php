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
								<th>Keluhan</th>
								<th>Tanggal</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
								@php
								$i=1;
								@endphp
									@foreach($list_pasien as $pasien)
									<tr>
										<td>{{$i}}</td>
                    <td>{{ $pasien->user->name }}</td>
										<td>{{ $pasien->deskripsi }}</td>
										<td>{{ $pasien->tanggal }}</td>
										<td>
                      <a href="{{route('ListPasien.edit',['id'=>$pasien->id_keluhan])}}" class="genric-btn primary info fa fa-pencil"></a>
                    </td>
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
