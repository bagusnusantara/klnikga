<form class="form-wrap" method="POST" action="{{ route('ListAccount.update',$list_account->id) }}">
     {{ method_field('PATCH')}}
     @csrf
   
    <h3 class="pb-20 text-center mb-30">Edit Account</h3>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $list_account->name }}" required autofocus>

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
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $list_account->email }}" required>
                
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
      <label for="roles" class="col-md-4 col-form-label text-md-right">{{ __('Roles') }}</label>
      <div class="col-md-3">
        <div class="form-select" id="service-select">
          <select>
            <option value="{{$list_account->roles}}"></option>
            <option value="dokter">Dokter</option>
            <option value="admin">Admin</option>
            <option value="pasien">Pasien</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group row">
        <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>
        <div class="col-md-6">
            <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ $list_account->nik }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>
        <div class="col-md-6">
            <input id="tempat_lahir" type="text" class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}" name="tempat_lahir" value="{{ $list_account->tempat_lahir }}" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
        <div class="col-md-6">
            <input id="datepicker1" type="text" name="tgl_lahir" class="dates form-control" value="{{ $list_account->tgl_lahir}}">
        </div>
    </div>

    <div class="form-group row">
      <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
      <div class="col-md-3">
        <div class="form-select" id="service-select">
          <select>
            <option value="{{$list_account->jenis_kelamin}}"></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group row">
        <label for="alamat_tinggal" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Tinggal') }}</label>
        <div class="col-md-6">
            <input id="alamat_tinggal" type="text" class="form-control{{ $errors->has('alamat_tinggal') ? ' is-invalid' : '' }}" name="alamat_tinggal" value="{{ $list_account->alamat_tinggal }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_asal" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Asal') }}</label>
        <div class="col-md-6">
            <input id="alamat_asal" type="text" class="form-control{{ $errors->has('alamat_asal') ? ' is-invalid' : '' }}" name="alamat_asal" value="{{ $list_account->alamat_asal }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>
        <div class="col-md-6">
            <input id="no_telp" type="text" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" value="{{ $list_account->no_telp }}" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>
        <div class="col-md-6">
            <input id="pekerjaan" type="text" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" name="pekerjaan" value="{{ $list_account->pekerjaan }}" required autofocus>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="primary-btn text-uppercase">
                {{ __('Update') }}
            </button>
        </div>
    </div>
</form>
