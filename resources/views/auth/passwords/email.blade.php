    <html>
    <head>
        <title>COINS TRASH | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    </head>

    <body style="overflow: hidden !important">
        <div class="container-fluid full no-scroll">
            <div class="row">
                <div class="col hide-sm hide-md">
                    <div class="gambar-login">
                        
                        <div style="display: flex; height: 100vh; align-items: center; margin: auto;background-color: rgba(0,0,0,0.6);">
                            <img src="/img/Banner.png" width="45%" style="margin: auto;">
                        </div>
                        
                    </div>
                </div>

                <div class="col text-muted p-4">
                    <br><br><br>
                    <div class="text-center">
                        <a class="text-muted " style="text-decoration: none" href="/"><h2 class="coinstrash w3-animate-left hide-sm hide-md">COINSTRASH</h2>
                            <img src="/img/Banner.png" width="45%" class="hide-lg" style="margin: auto;">
                        </a>
                        <div class="text-secondary hide-sm hide-md w3-animate-right">lupa kata sandi?</div>
                    </div>

                    
                    <div class="container p-5">
                        <form class="text-center" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">

                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} kostum" placeholder="Masukan Email Anda" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-5">
                            <div class="">
                                <button type="submit" class="btn btn-secondary w-50">
                                    {{ __('Send Request') }}
                                </button>

                                <center><small><a href="{{ route('login') }}" class="w-50 mt-2 d-block text-secondary">Kembali</a></small></center>
                            </div>
                        </div>
                    </form>
                    </div>

                </div>

            </div>
        </div>
    </body>

    </html>