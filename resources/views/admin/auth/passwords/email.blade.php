@extends('admin.layouts.auth')
@section('title', 'Admin Forget Password')
@section('content')

	<form method="POST" action="{{ route('admin.password.email') }}" class="login-form wmin-sm-400">
		<div class="card mb-0 border-top-success" style="border-radius: 40px;background-color: gainsboro;">
			@csrf
			<div class="card-body">
				
				<div>
					<div class="text-center mb-3">
						<div style="margin-bottom:12px;">
							<img src="{{ asset('frontend-assets/img/logo.jpeg') }}" alt="Karissa Subedi Career Consultancy Services" style="max-width:280px; height:auto;">
						</div>
						<h5 class="mb-0 mt-2">Password Reset</h5>
						<span class="d-block text-muted">Please provide email address</span>
					</div>
					
                    @if (session('status'))
                    <div class="alert alert-info">
                        {{ session('status') }}
                    </div>
                    @endif

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
						<button type="submit" class="btn bg-primary btn-block"><b>Send Password Reset Link</b></button>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection
