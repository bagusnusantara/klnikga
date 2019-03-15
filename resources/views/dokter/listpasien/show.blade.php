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
                      <!-- <a href="{{route('ListPasien.edit',['id'=>$pasien->id])}}" class="genric-btn success small">Edit</a><br> -->
                      <button class="genric-btn success small"
                              data-myid="{{ $trans->id }}"
                              data-myriwayat_penyakit="{{ $trans->riwayat_penyakit }}"
                              data-myriwayat_alergi="{{ $trans->riwayat_alergi }}"
                              data-mytekanan_darah_atas="{{ $trans->tekanan_darah_atas }}"
                              data-mytekanan_darah_bawah="{{ $trans->tekanan_darah_bawah }}"
                              data-myberat_badan="{{ $trans->berat_badan }}"
                              data-mytinggi_badan="{{ $trans->tinggi_badan }}"
                              data-mysubjective="{{ $trans->subjective }}"
                              data-myobjective="{{ $trans->objective }}"
                              data-mydiagnosa="{{ $trans->diagnosa }}"
                              data-myplanning="{{ $trans->planning }}"
                              data-mydokter="{{ $trans->dokter }}"
                              data-myjenis_kehamilan="{{ $trans->jenis_kehamilan }}"
                              data-mykondisi_janin="{{ $trans->kondisi_janin }}"
                              data-myletak_kepala="{{ $trans->letak_kepala }}"
                              data-mycairan_ketuban="{{ $trans->cairan_ketuban }}"
                              data-myplacenta_di="{{ $trans->placenta_di }}"
                              data-mygrade="{{ $trans->grade }}"
                              data-mysex="{{ $trans->sex }}"
                              data-mytaksiran_berat_janin="{{ $trans->taksiran_berat_janin }}"
                              data-mysuami_ke="{{ $trans->suami_ke }}"
                              data-myanak_ke="{{ $trans->anak_ke }}"
                              data-mytgl_periksa_selanjutnya="{{ $trans->tgl_periksa_selanjutnya }}"
                              data-mytaksiran_persalinan="{{ $trans->taksiran_persalinan }}"
                              data-mytgl_periksa="{{ $trans->tgl_periksa }}"
                              data-myhpht="{{ $trans->hpht }}"
                              data-myusia_kehamilan="{{ $trans->usia_kehamilan }}"
                              data-myketerangan="{{ $trans->keterangan }}"
                              data-toggle="modal" data-target="#edit">Edit</button>

                      <form id="delete-form-{{ $trans->id }}" action="{{ route('ListPasien.destroy',$trans->id) }}" style="display: none;" method="POST">
                                  @csrf
                                  @method('DELETE')
                                </form>
                                <button type="button" class="genric-btn danger small" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $trans->id }}').submit();
                                }else {  event.preventDefault();}">Delete</button>
											<!-- <a href="{{route('ListPasien.show',['id'=>$pasien->id])}}" class="genric-btn danger small">Delete</a></td> -->
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

        {{-- Update data --}}
        <div class="modal inmodal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ route('ListPasien.update',$trans->id) }}" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                        @csrf
                                @include('dokter.pemeriksaan_fisik.form_pemeriksaan')
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <script>
            $('#edit').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal

                var id = button.data('myid')
                var riwayat_penyakit = button.data('myriwayat_penyakit')
                var riwayat_alergi = button.data('myriwayat_alergi')
                var tekanan_darah_atas = button.data('mytekanan_darah_atas')

                var tekanan_darah_bawah = button.data('mytekanan_darah_bawah')
                var riwayat_penyakit = button.data('myriwayat_penyakit')
                var riwayat_alergi = button.data('myriwayat_alergi')
                var tekanan_darah_atas = button.data('mytekanan_darah_atas')

                var id = button.data('myid')
                var riwayat_penyakit = button.data('myriwayat_penyakit')
                var riwayat_alergi = button.data('myriwayat_alergi')
                var tekanan_darah_atas = button.data('mytekanan_darah_atas')

                var modal = $(this)

                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #riwayat_penyakit').val(riwayat_penyakit);
                modal.find('.modal-body #riwayat_alergi').val(riwayat_alergi);
                modal.find('.modal-body #tekanan_darah_atas').val(tekanan_darah_atas);


                data-mytekanan_darah_bawah="{{ $trans->tekanan_darah_bawah }}"
                data-myberat_badan="{{ $trans->berat_badan }}"
                data-mytinggi_badan="{{ $trans->tinggi_badan }}"
                data-mysubjective="{{ $trans->subjective }}"
                data-myobjective="{{ $trans->objective }}"
                data-mydiagnosa="{{ $trans->diagnosa }}"
                data-myplanning="{{ $trans->planning }}"
                data-mydokter="{{ $trans->dokter }}"
                data-myjenis_kehamilan="{{ $trans->jenis_kehamilan }}"
                data-mykondisi_janin="{{ $trans->kondisi_janin }}"
                data-myletak_kepala="{{ $trans->letak_kepala }}"
                data-mycairan_ketuban="{{ $trans->cairan_ketuban }}"
                data-myplacenta_di="{{ $trans->placenta_di }}"
                data-mygrade="{{ $trans->grade }}"
                data-mysex="{{ $trans->sex }}"
                data-mytaksiran_berat_janin="{{ $trans->taksiran_berat_janin }}"
                data-mysuami_ke="{{ $trans->suami_ke }}"
                data-myanak_ke="{{ $trans->anak_ke }}"
                data-mytgl_periksa_selanjutnya="{{ $trans->tgl_periksa_selanjutnya }}"
                data-mytaksiran_persalinan="{{ $trans->taksiran_persalinan }}"
                data-mytgl_periksa="{{ $trans->tgl_periksa }}"
                data-myhpht="{{ $trans->hpht }}"
                data-myusia_kehamilan="{{ $trans->usia_kehamilan }}"
                data-myketerangan="{{ $trans->keterangan }}"
            })
        </script>


</body>
</html>
@stop
