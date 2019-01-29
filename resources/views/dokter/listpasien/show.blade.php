@extends('layouts.main')
@section('contents')

<!DOCTYPE html>
<html lang="invalid-feedback" class="no-js">
<body>
  <!-- Start Align Area -->
  			<div class="whole-wrap">
  				<div class="container">

  					<div class="section-top-border text-left">
  						<h3 class="mb-30">Histori Rekam Medis Pasien</h3>
  						<div class="row">
  							<div class="col-md-9">
                  <!-- <table class="table table-striped table-bordered table-hover dataTables-example" >
                  <tr>
                  <td>1</td>
                  <td align="left">Nama</td>
                  <td>

                  </td>
                  </tr>
                  <tr>
                  <td>2</td>
                  <td align="left">Terlalu tua hamil I ≥ 35 Tahun</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>3</td>
                  <td align="left">Terlalu lambat hamil I kawin ≥ 4 Tahun</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>4</td>
                  <td align="left">Terlalu lama hamil lagi ≥ 10 Tahun</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>5</td>
                  <td align="left">Terlalu cepat hamil lagi ≤ 2 Tahun</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>6</td>
                  <td align="left">Terlalu banyak anak, 4 atau lebih</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>7</td>
                  <td align="left">Terlalu tua umur ≥ 35 Tahun</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>8</td>
                  <td align="left">Terlalu pendek ≤ 145 cm</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td align="left">Pernah Gagal kehamilan</td>
                    <td>
                    </td>
                  </tr>
                  <tr>
                  <td>10</td>
                  <td align="left">Pernah melahirkan dengan terikan tang / vakum</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>11</td>
                  <td align="left">Pernah melahirkan dengan uri dirogoh</td>
                  <td>
                  </td>
                  </tr>
                  <tr>
                  <td>12</td>
                  <td align="left">Pernah melahirkan dengan diberi infus/transfuse</td>
                  <td>
                  </td>
                  </tr>
                    <tr>
                    <td>13</td>
                    <td align="left">Pernah Operasi Sesar</td>
                    <td>
                    </td>
                    </tr>
                    <tr>
                  <td>14</td>
                  <td align="left">Kurang Darah</td>
                  <td>
                  </td>
                  </tr>

                  </table> -->

  							</div>
  						</div>
  					</div>

  				</div>
  			</div>
  			<!-- End Align Area -->

	<section class="rekam-medis text-right">
    <!-- Trigger the modal with a button -->
    <button type="button" class="genric-btn success " data-toggle="modal" data-target="#myModal">+ Tambah Record</button>
	</section>
  <section class="rekam-medis text-right">
    <!-- Trigger the modal with a button -->
  <br>
	</section>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          @include('dokter.pemeriksaan_fisik.form_pemeriksaan')
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary info">Simpan</button>
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>

    </div>
  </div>
	<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>Subjective</th>
                <th>Dokter</th>
                <th>Tanggal Periksa</th>
								<th>Tindakan</th>
                <!-- <th>Tabel PR</th> -->
							</tr>
						</thead>
						<tbody>
								@php
								$i=1;
								@endphp
									@foreach($trans_medis_fisik as $trans)
									<tr>
										<td>{{$i}}</td>
                    <td>{{ $trans->subjective}}</td>
                    <td>{{ $trans->dokter}}</td>
                    <td>{{ $trans->tgl_periksa}}</td>
                    <td>
                      <a href="{{route('Periksa.show',['id'=>$trans->id])}}" class="genric-btn primary small">Detail</a><br>
                      <a href="{{route('ListPasien.show',['id'=>$pasien->id])}}" class="genric-btn success small">Edit</a><br>
											<a href="{{route('ListPasien.show',['id'=>$pasien->id])}}" class="genric-btn danger small">Delete</a></td>
                    </td>
                    <!-- <td>
                        <button type="button" class="genric-btn info fa fa-pencil small" data-toggle="modal" data-target="#myModal1"></button>
                    </td> -->
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
