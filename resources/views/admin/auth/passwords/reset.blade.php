@extends('admin.layouts.auth')
@section('title', 'Admin Reset Password')
@section('content')
    <form method="POST" action="{{ route('admin.password.update') }}" class="login-form wmin-sm-400">
		<div class="card mb-0 border-top-success" style="border-radius: 40px;background-color: gainsboro;">
			@csrf
			<div class="card-body">
				
				<div>
					<div class="text-center mb-3">
						<div style="margin-bottom:12px;">
							<img src="{{ asset('frontend-assets/img/logo.jpeg') }}" alt="Karissa Subedi Career Consultancy Services" style="max-width:280px; height:auto;">
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