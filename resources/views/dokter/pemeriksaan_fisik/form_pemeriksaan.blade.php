<form method="POST" action="{{ route('ListPasien.store') }}" class="form-horizontal" enctype="multipart/form-data">
@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID Pasien') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" value="{{ $pasien->id }}" name="users_id" readonly="readonly">
    </div>
</div>
<div class="form-group row">
    <label for="users_id" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
    <div class="col-md-6">
        <input id="users_id" type="text" class="form-control" value="{{ $pasien->name }}" readonly="readonly">
    </div>
</div>
<div class="form-group row">
    <label for="tgl_periksa" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pemeriksaan') }}</label>
    <div class="col-md-6">
        <input id="datepicker1" type="text" name="tgl_periksa" class="dates form-control">
    </div>
</div>
<div class="form-group row">
  <label for="suami ke-" class="col-md-4 col-form-label text-md-right">{{ __('Suami ke') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="suami_ke" id="default-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
       </select>
     </div>
</div>
<div class="form-group row">
  <label for="anak ke-" class="col-md-4 col-form-label text-md-right">{{ __('Anak ke') }}</label>
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
  <label for="suami ke-" class="col-md-4 col-form-label text-md-right">{{ __('Dokter Pemeriksa') }}</label>
      <div class="col-md-6">
        <select class="default-select" name="dokter" id="default-select">
                <option value="Muhammad Ardian.C.L., dr. Sp.OG(K), M. Kes">Muhammad Ardian.C.L., dr. Sp.OG(K), M. Kes</option>
                <option value="dr. Salmon Charles.P.T.Siahaan, Sp.OG">dr. Salmon Charles.P.T.Siahaan, Sp.OG</option>
                <option value="dr. Hartatiek Nila Karmila, Sp.OG">dr. Hartatiek Nila Karmila, Sp.OG</option>
                <option value="dr. Rizqi Rokhmadhoni Pikir, Sp.A">dr. Rizqi Rokhmadhoni Pikir, Sp.A</option>
                <option value="dr. Arif Tunjungseto, Sp.OG">dr. Arif Tunjungseto, Sp.OG</option>
       </select>
     </div>
</div>

  <div class="form-group row">
      <label for="HPHT" class="col-md-4 col-form-label text-md-right">{{ __('Hari Pertama Haid terakhir') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="hpht" class="dates form-control">
      </div>
  </div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah Atas') }}<br><small> (mmHg)</small></label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('tekanan_darah_atas') ? ' is-invalid' : '' }}" name="tekanan_darah_atas" value="{{ old('tekanan_darah_atas') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tekanan Darah Bawah') }}<br><small> (mmHg)</small></label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('tekanan_darah_bawah') ? ' is-invalid' : '' }}" name="tekanan_darah_bawah" value="{{ old('tekanan_darah_bawah') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tinggi Badan') }}<br><small> (cm)</small></label></label>
    <div class="col-md-6">
      <input id="name" type="text" class="form-control{{ $errors->has('tinggi_badan') ? ' is-invalid' : '' }}" name="tinggi_badan" value="{{ old('tinggi_badan') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Berat Badan') }}<br><small> (Kg)</small></label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('berat_badan') ? ' is-invalid' : '' }}" name="berat_badan" value="{{ old('berat_badan') }}" required autofocus>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Penyakit') }}</label>
    <div class="col-md-6">
      <textarea name="riwayat_penyakit" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
    </div>
</div>

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Riwayat Alergi') }}</label>
      <div class="col-md-6">
        <textarea name="riwayat_alergi" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Subjective') }}</label>
      <div class="col-md-6">
        <textarea name="subjective" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Objective') }}</label>
      <div class="col-md-6">
        <textarea name="objective" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Diagnosa') }}</label>
      <div class="col-md-6">
        <textarea name="diagnosa" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Planning') }}</label>
      <div class="col-md-6">
        <textarea name="planning" class="form-control" rows="3" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
      </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kehamilan" class="col-md-4 col-form-label text-md-right">{{ __('Jenis kehamilan') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="jenis_kehamilan" id="default-select">
                  <option value="Janin Tunggal">Janin Tunggal</option>
                  <option value="Gemeli">Gemeli</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
    <label for="kondisi_janin" class="col-md-4 col-form-label text-md-right">{{ __('Kondisi Janin') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="kondisi_janin" id="default-select">
                  <option value="Hidup">Hidup</option>
                  <option value="Mati">Mati</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
    <label for="letak_kepala" class="col-md-4 col-form-label text-md-right">{{ __('Letak Kepala') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="letak_kepala" id="default-select">
                  <option value="Sungsang">Sungsang</option>
                  <option value="Lintang">Lintang</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('BPD') }}<br><small> (mg)</small></label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('BPD') ? ' is-invalid' : '' }}" name="BPD" value="{{ old('BPD') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('FL') }}<br><small> (mg)</small></label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('FL') ? ' is-invalid' : '' }}" name="FL" value="{{ old('FL') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
    <label for="suami ke-" class="col-md-4 col-form-label text-md-right">{{ __('Cairan Ketuban') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="cairan_ketuban" id="default-select">
                  <option value="Kurang">Kurang</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Banyak">Banyak</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Letak Placenta') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('placenta_di') ? ' is-invalid' : '' }}" name="placenta_di" value="{{ old('placenta_di') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Grade') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" name="grade" value="{{ old('grade') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
    <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Kelamin Bayi') }}</label>
        <div class="col-md-6">
          <select class="default-select" name="sex" id="default-select">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
         </select>
       </div>
  </div>
  <div class="form-group row">
      <label for="taksiran_persalinan" class="col-md-4 col-form-label text-md-right">{{ __('Taksiran Persalinan') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="taksiran_persalinan" class="dates form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Taksiran Berat Janin') }}<br><small> (gram)</small></label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control{{ $errors->has('taksiran_berat_janin') ? ' is-invalid' : '' }}" name="taksiran_berat_janin" value="{{ old('taksiran_berat_janin') }}" required autofocus>
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pemeriksaan Selanjutnya') }}</label>
      <div class="col-md-6">
          <input id="datepicker1" type="text" name="tgl_periksa_selanjutnya" class="dates form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 1') }}</label>
      <div class="col-md-6">
          <input id="foto1" name="foto1" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 2') }}</label>
      <div class="col-md-6">
          <input id="foto2" name="foto2" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 3') }}</label>
      <div class="col-md-6">
          <input id="foto3" name="foto3" type="file" class="form-control">
      </div>
  </div>
  <div class="form-group row">
      <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Foto 4') }}</label>
      <div class="col-md-6">
          <input id="foto4" name="foto4" type="file" class="form-control">
      </div>
  </div>
