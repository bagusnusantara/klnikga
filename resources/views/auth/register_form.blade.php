<form class="form-wrap" method="POST" action="{{ route('register') }}">
    @csrf
    <h3 class="pb-20 text-center mb-30">Daftar Sekarang</h3>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat E-Mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>
        <div class="col-md-6">
            <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>
        <div class="col-md-6">
            <input id="tempat_lahir" type="text" class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
        <div class="col-md-6">
            <input id="datepicker1" type="text" name="tgl_lahir" class="dates form-control">
        </div>
    </div>
    <!-- <div class="form-group row">
      <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
          <div class="col-md-6">
            <select class="default-select" id="service-select" name="jenis_kelamin">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
           </select>
         </div>
    </div>
    <div class="form-group row">
      <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
      <div class="col-md-6">
        <div class="form-select" id="service-select" name="jenis_kelamin">
          <select>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>
    </div> -->

    <div class="form-group row">
        <label for="alamat_tinggal" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Tinggal') }}</label>
        <div class="col-md-6">
            <input id="alamat_tinggal" type="text" class="form-control{{ $errors->has('alamat_tinggal') ? ' is-invalid' : '' }}" name="alamat_tinggal" value="{{ old('alamat_tinggal') }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_asal" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Asal') }}</label>
        <div class="col-md-6">
            <input id="alamat_asal" type="text" class="form-control{{ $errors->has('alamat_asal') ? ' is-invalid' : '' }}" name="alamat_asal" value="{{ old('alamat_asal') }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>
        <div class="col-md-6">
            <input id="no_telp" type="text" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" value="{{ old('no_telp') }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>
        <div class="col-md-6">
            <input id="pekerjaan" type="text" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" name="pekerjaan" value="{{ old('pekerjaan') }}" required autofocus>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="primary-btn text-uppercase">
                {{ __('Daftar') }}
            </button>
        </div>
    </div>
</form>
