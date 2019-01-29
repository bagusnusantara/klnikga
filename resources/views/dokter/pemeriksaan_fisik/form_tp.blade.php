<form method="POST" action="{{ route('TransPudji.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf

<div class="form-group row">
    <label for="trans_keluhan_id" class="col-md-4 col-form-label text-md-right">{{ __('ID Pemeriksaan') }}</label>
    <div class="col-md-6">
        <input id="trans_medis_fisik_id" type="text" class="form-control" value="{{ $trans_medis_fisik->id }}" name="trans_medis_fisik_id" readonly="readonly">
    </div>
</div>
<div class="form-group row">
  <label for="terlalu_muda_hamil" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu muda hamil I ≤ 16 Tahun') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_muda_hamil" id="default-select">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_tua_hamil" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu tua hamil I ≥ 35 Tahun') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_tua_hamil">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_lambat_hamil" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu lambat hamil I kawin ≥ 4 Tahun') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_lambat_hamil">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_lama_hamil_lagi" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu lama hamil lagi ≥10 Tahun') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_lama_hamil_lagi">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_cepat_hamil_lagi" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu cepat hamil lagi ≤ 2 Tahun') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_cepat_hamil_lagi">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_banyak_anak" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu banyak anak, 4 atau lebih') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_banyak_anak">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_tua_umur" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu tua umur ≥ 35 Tahun') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_tua_umur">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terlalu_pendek" class="col-md-6 col-form-label text-md-right">{{ __('Terlalu pendek ≤ 145 cm') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terlalu_pendek">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="pernah_gagal_kehamilan" class="col-md-6 col-form-label text-md-right">{{ __('Pernah gagal kehamilan') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="pernah_gagal_kehamilan">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="terikan_tang" class="col-md-6 col-form-label text-md-right">{{ __('Pernah melahirkan dengan terikan tang/vakum') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="terikan_tang">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="uri_dirogoh" class="col-md-6 col-form-label text-md-right">{{ __('Pernah melahirkan dengan uri dirogoh') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="uri_dirogoh">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="diberi_infus" class="col-md-6 col-form-label text-md-right">{{ __('Pernah melahirkan dengan diberi infus/transfuse') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="diberi_infus">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="pernah_operasi_sesar" class="col-md-6 col-form-label text-md-right">{{ __('Pernah operasi sesar') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="pernah_operasi_sesar">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="kurang_darah" class="col-md-6 col-form-label text-md-right">{{ __('Kurang Darah') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="kurang_darah">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="malaria" class="col-md-6 col-form-label text-md-right">{{ __('Malaria') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="malaria">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="tbc" class="col-md-6 col-form-label text-md-right">{{ __('TBC Paru') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="tbc">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="payah" class="col-md-6 col-form-label text-md-right">{{ __('Payah Jantung') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="payah">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="diabetes" class="col-md-6 col-form-label text-md-right">{{ __('Kencing Manis (Diabetes)') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="diabetes">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="penyakit_menular_seksual" class="col-md-6 col-form-label text-md-right">{{ __('Penyakit Menular Seksual') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="penyakit_menular_seksual">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="bengkak_pada_muka" class="col-md-6 col-form-label text-md-right">{{ __('Bengkak pada muka / tungkai dan tekanan darah tinggi.') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="bengkak_pada_muka">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="hamil_kembar" class="col-md-6 col-form-label text-md-right">{{ __('Hamil kembar') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="hamil_kembar">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="hydramnion" class="col-md-6 col-form-label text-md-right">{{ __('Hydramnion') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="hydramnion">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="bayi_mati_dalam_kandungan" class="col-md-6 col-form-label text-md-right">{{ __('Bayi mati dalam kandungan') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="bayi_mati_dalam_kandungan">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="kehamilan_lebih_bulan" class="col-md-6 col-form-label text-md-right">{{ __('Kehamilan lebih bulan') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="kehamilan_lebih_bulan">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="letak_sungsang" class="col-md-6 col-form-label text-md-right">{{ __('Letak sungsang') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="letak_sungsang">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="letak_lintang" class="col-md-6 col-form-label text-md-right">{{ __('Letak Lintang') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="letak_lintang">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="perdarahan" class="col-md-6 col-form-label text-md-right">{{ __('Perdarahan dalam kehamilan ini') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="perdarahan">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="preeklampsia" class="col-md-6 col-form-label text-md-right">{{ __('Preeklampsia / kejang-kejang') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="preeklampsia">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
       </select>
     </div>
</div>
<button type="submit" class="genric-btn primary info">Simpan</button>
</form>
