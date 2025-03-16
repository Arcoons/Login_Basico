<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="assets/style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Iniciar Sesiòn</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="{{ route('login') }}" method="POST" role="form" style="display: block;">
                                    @csrf
									<div class="form-group">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Correo" name="email">
									</div>
									<div class="form-group">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" name="password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recuerdame</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesiòn">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Olvido su contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" method="POST" action="{{ route('register') }}" role="form" style="display: none;">
									<div class="form-group">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
										<input type="text" name="name" id="username" tabindex="1" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									<div class="form-group">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									<div class="form-group">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</div>
									<div class="form-group">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>
										<input type="password" name="password_confirmation" id="password-confirm" tabindex="2" class="form-control" required autocomplete="new-password" placeholder="Confirmar contraseña" required autocomplete="new-password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar">
											</div>
										</div>
									</div>
								</form>
                                <script src="assets/accion.js"></script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>