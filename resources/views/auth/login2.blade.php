<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="{{ asset('medical/css/style.css') }}">

</head>

<body>

  <div class="login_form">
  <setion class="login-wrapper">

    <div class="logo">

		 <img src="https://ppk.stikku.ac.id/wp-content/uploads/2017/10/LOGO-DEPKES-BAKTI-HUSADA.png" alt=""></a>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

            </div>
        </div>
    </form>

    <!-- <form id="login" method="post" action="#">

      <label for="username">User Name</label>
      <input  required name="login[username]" type="text" autocapitalize="off" autocorrect="off"/>

      <label for="password">Password</label>
      <input class="password" required name="login[password]" type="password" />
      <div class="hide-show">
        <span>Show</span>
      </div>
      <button type="submit">Sign In</button>
    </form> -->

  </section>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="{{ asset('medical/js/index.js') }}"></script>




</body>

</html>
