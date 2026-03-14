@extends('admin.layouts.auth')
@section('title', 'Admin Reset Password')
@section('content')
    <form method="POST" action="{{ route('admin.password.update') }}" class="login-form wmin-sm-400">
		<div class="card mb-0 border-top-success" style="border-radius: 40px;background-color: gainsboro;">
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
						<h5 class="mb-0 mt-2">Reset Password</h5>
					</div>
					
                    @if (session('status'))
                    <div class="alert alert-info">
                        {{ session('status') }}
                    </div>
                    @endif
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="text-sm text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Password <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                             
                                @error('password')
                                    <span class="text-sm text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="">Confirm Password <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-sm-12 form-group">
                            <button type="submit" class="btn bg-primary btn-block"><b>Reset Password</b></button>
                        </div>
                    </div>
				</div>
			</div>
		</div>
    </form>
@endsection