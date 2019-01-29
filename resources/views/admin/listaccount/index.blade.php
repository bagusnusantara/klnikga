@extends('layouts.main')
@section('content')


<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>

	<section class="list-account">
		<p><h1> List Account </h1></p>
	
	<div class="table-responsive">
					<table class="table table-hover" id="dataTable" style="width:100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>ID</th>
                				<th>Nama</th>
								<th>E-Mail</th>
								<th>Role</th>
								<th>Alamat</th>
								<th>No. Telp</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
								@php
								$i=1;
								@endphp
									
									<tr> 
									@foreach($list_account as $list)
										<td>{{$i}}</td>
										<td>{{ $list->id }}</td>
                    					<td>{{ $list->name }}</td>
										<td>{{ $list->email }}</td>
										<td>{{ $list->roles }}</td>
										<td>{{ $list->alamat_tinggal }}</td>
										<td>{{ $list->no_telp }}</td>
										<td width="200%">
									
                     				<a href="{{route('ListAccount.edit',['id'=>$list->id])}}"  class="genric-btn primary-border small fa fa-pencil"></a>
                     		
                     				<form id="delete" action="{{ route('ListAccount.destroy', $list->id)}}" method="post">
                  						@csrf
                  						@method('DELETE')
                  						<button class="genric-btn danger small fa fa-trash" type="submit" ></button>
                					</form>
                    					</td>
									</tr>
								@php
								$i++;
								@endphp
							@endforeach

						</tbody>
					</table>
		</div>
		</section>
</body>
</html>
@stop