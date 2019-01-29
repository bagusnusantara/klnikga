@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>

	<section class="rekam-medis">
		<p><h1> Rekam Medis Anda </h1></p>
		<p>
	</section>
	<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Subjective</th>
								<th>Tanggal</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
								@php
								$i=1;
								@endphp
									@foreach($trans_medis_fisik_list as $trans)
									<tr>
										<td>{{$i}}</td>
										<td>{{ $trans->name}}</td>
										<td>{{ $trans->subjective}}</td>
										<td>{{ $trans->tgl_periksa}}</td>
										<td><a href="{{route('Periksa.show',['id'=>$trans->id])}}" class="genric-btn primary small">Detail</a></a></td>
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
