@extends('admin.layouts.auth')
@section('title', 'Admin Login')
@section('content')
	<!-- Login form -->
	<form method="POST" action="{{ route('admin.login') }}" class="login-form wmin-sm-400">
		<div class="card mb-0" style="border-radius: 40px;background-color: gainsboro; border-top: 3px solid #C8A46A;">
			@csrf
			<div class="card-body">
				
				<div>
					<div class="text-center mb-3">
						<div style="display:inline-flex; align-items:center; margin-bottom:12px;">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48" style="flex-shrink:0;">
								<rect width="48" height="48" rx="6" fill="#4A3428"/>
								<text x="24" y="33" text-anchor="middle" font-family="'Playfair Display','Georgia',serif" font-size="24" font-weight="700" fill="#C8A46A" letter-spacing="-1">KS</text>
							</svg>
							<span style="margin-left:10px; display:flex; flex-direction:column; line-height:1.2; text-align:left;">
								<span style="color:#4A3428; font-weight:600; font-size:1rem;">Karissa Subedi</span>
								<span style="color:#C8A46A; font-size:0.65rem; text-transform:uppercase; letter-spacing:0.05em;">Career Consultancy Services</span>
							</span>
						</div>
						<h5 class="mb-0 mt-2">Login to <b style="color: #C8A46A;">Admin Panel</b></h5>
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
						<button type="submit" class="btn btn-block" style="background-color: #4A3428; color: #fff;"><b>Login</b></button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- /login form -->
@endsection
