	<html>
	<head>
		<title>COINS TRASH | Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	</head>

	<body style="overflow: hidden !important">
		<div class="container-fluid full no-scroll">
			<div class="row">
				<div class="col hide-sm hide-md">
					<div class="gambar-login">

						<div style="display: flex; height: 100vh; align-items: center; margin: auto;background-color: rgba(0,0,0,0.6);">
							<img src="img/Banner.png" width="45%" style="margin: auto;">
						</div>

					</div>
				</div>

				<div class="col text-muted p-4">
					<br><br>
					<div class="text-center">
						<a class="text-muted " style="text-decoration: none" href="/"><h2 class="coinstrash w3-animate-left hide-sm hide-md">COINSTRASH</h2>
							<img src="img/Banner.png" width="45%" class="hide-lg w3-animate-top" style="margin: auto;">
						</a>
						<div class="text-secondary hide-sm hide-md w3-animate-right">Selamat Datang Silahkan Login!</div>
					</div>



					<div class="container p-5">
						<form method="POST" action="{{ route('login') }}">
							@csrf

							<div class="form-group">
								<div class="">
									<input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} kostum" name="email" value="{{ old('email') }}" required autofocus>

									@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="">
									<input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} kostum" name="password" required>

									@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="">
									<div class="form-check float-left">
										<input class="form-check-input float-left" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

										<label class="form-check-label" for="remember">
											{{ __('Ingat Saya?') }}
										</label>
									</div>

									<div class="float-right">
										<a class="text-secondary" href="{{ route('password.request') }}">
											{{ __('Lupa Password?') }}
										</a>
									</div>
								</div>
							</div>
							<br><br>
							<div class=" text-center">
								<div class="d-inline-block">
									<button type="submit" class="btn btn-secondary w3-animate-left" style="width: 100px">
										{{ __('Masuk') }}
									</button>

									<a class="btn border text-secondary ml-2 w3-animate-right" href="{{ route('register') }}" style="width: 100px">{{ __('Register') }}</a>

								</div>
							</div>


						</form>
					</div>

				</div>

			</div>
		</div>
	</body>

	</html>
