@extends('admin.layouts.auth')
@section('title', 'Admin Login')
@section('content')
	<!-- Login form -->
	<form method="POST" action="{{ route('admin.login') }}" class="login-form wmin-sm-400">
		<div class="card mb-0 border-top-success" style="border-radius: 40px;background-color: gainsboro;">
			@csrf
			<div class="card-body">
				
				<div>
					<div class="text-center mb-3">
						<img src="{{ asset($setting->company_logo) }}" alt="" width="75%" height="75%">
						<h5 class="mb-0 mt-2">Login to <b class="text-primary">Trinty Admin Login</b></h5>
						<span class="d-block text-muted">Your credentials</span>
					</div>
					

                    <div class="form-group">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-user text-primary"></i>
                            </div>
                        </div>
                        @error('email')
                            <span class="text-sm text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-primary"></i>
                            </div>
                        </div> 
                        @error('password')
                            <span class="text-sm text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

					<div class="forgot-password">
						<p><a class="register-link text-primary" href="{{ route('admin.password.request') }}">Forgot password?</a></p>
					</div>

					<div class="form-group">
						<button type="submit" class="btn bg-primary btn-block"><b>Login</b></button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- /login form -->
@endsection
