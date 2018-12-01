<html>

<head>
    <title>COINS TRASH | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>

<body class="no-scroll" style="overflow: hidden !important">
    <div class="container-fluid full no-scroll">
        <div class="row">
            <div class="col hide-sm hide-md">
                <div class="gambar-login">
                    <div style="display: flex; height: 100vh; align-items: center; margin: auto;background-color: rgba(0,0,0,0.6);">
                        <img src="img/Banner.png" width="45%" style="margin: auto;">
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="container no-scroll p-4 text-muted">

                    <br><br>
                    <div class="text-center">
                        <a class="text-muted " style="text-decoration: none" href="/">
                            <h2 class="coinstrash hide-sm hide-md w3-animate-left">COINSTRASH</h2>
                            <img src="img/Banner.png" width="45%" class="hide-lg w3-animate-top" style="margin: auto;">
                        </a>
                        <div class="text-secondary w3-animate-right hide-sm hide-md">Selamat Datang Silahkan Daftar!</div>
                    </div>
                    <br>
                    <form class="p-3" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">

                            <div class="">
                                <input id="name" placeholder="Masukan Nama" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} kostum" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">

                            <div class="">
                                <input autocomplete="off" placeholder="Masukan Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} kostum" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">

                            <div class="">
                                <input placeholder="Masukan Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} kostum" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">

                            <div class="">
                                <input placeholder="Ulangi Password" id="password-confirm" type="password" class="form-control kostum" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-secondary w-100">
                                    {{ __('Daftar') }}
                                </button>
                                <br><br>
                                <a class="text-secondary" href="{{ route('login') }}">Sudah Punya Akun?</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
