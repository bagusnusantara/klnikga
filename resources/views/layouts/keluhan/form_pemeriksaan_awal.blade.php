<form method="POST" action="{{ route('PeriksaAwal.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf

<div class="form-group row">
  <label for="suami ke-" class="col-md-6 col-form-label text-md-right">{{ __('Suami ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="suami_ke">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="anak ke-" class="col-md-6 col-form-label text-md-right">{{ __('Anak ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="anak_ke">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="1">5</option>
                <option value="2">6</option>
                <option value="3">7</option>
                <option value="4">8</option>
                <option value="1">9</option>
                <option value="2">10</option>
                <option value="3">11</option>
                <option value="4">12</option>
       </select>
     </div>
</div>

  <div class="form-group row">
      <label for="HPHT" class="col-md-4 col-form-label text-md-right">{{ __('Hari Pertama Haid terakhir') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="hpht" class="dates form-control">
      </div>
  </div>

  <button type="submit" class="genric-btn primary info">Simpan</button>
</form>
