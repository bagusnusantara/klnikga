
<div class="form-group row">
        <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('Suami ke-') }}</label>
        <div class="col-md-6">
            <input id="nik" type="text" class="form-control{{ $errors->has('suami_ke') ? ' is-invalid' : '' }}" name="suami_ke" value="{{ $periksa->suami_ke }}" required autofocus readonly="readonly">
        </div>
    </div>
<div class="form-group row">
        <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('Anak ke-') }}</label>
        <div class="col-md-6">
            <input id="nik" type="text" class="form-control{{ $errors->has('anak_ke') ? ' is-invalid' : '' }}" name="anak_ke" value="{{ $periksa->anak_ke }}" required autofocus readonly="readonly">
        </div>
    </div>

 <div class="form-group row">
        <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('Hari Pertama Haid Terakhir') }}</label>
        <div class="col-md-6">
            <input id="nik" type="text" class="form-control{{ $errors->has('hpht') ? ' is-invalid' : '' }}" name="hpht" value="{{ $periksa->hpht }}" required autofocus readonly="readonly">
        </div>
</div>

<form method="POST" action="{{ route('PeriksaAwal.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf
    <span><p>Tekan tombol OK jika pasien telah melahirkan<p></span>
  <button type="submit" class="genric-btn primary info">Ok</button>

</form>