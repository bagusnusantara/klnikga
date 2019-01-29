@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
	<section class= "form-keluhan">
		<h1> Form Kritik dan Saran</h1>
    <form method="POST" action="{{ route('Masukan.store') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf

		<div class="form-group" name="deskripsi" id="deskripsi">
    		<label for="FormControlTextarea1">Masukkan Kritik dan Saran Anda :</label>
        <textarea name="deskripsi" class="form-control" rows="5" placeholder="Masukkan Kritik dan Saran" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
    		<!-- <textarea class="form-control" id="FormControlTextarea1" rows="4" required></textarea> -->
  		</div>
  		<button type="submit" class="genric-btn primary info">Submit</button>
	</form>
	</section>


</body>
</html>
@stop
