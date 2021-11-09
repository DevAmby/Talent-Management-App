@extends('layouts.auth')

@section('content')


	
<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

        
        @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

			<form method="POST" action="{{ route('login') }}">
                        @csrf
				<span class="login100-form-title p-b-37">
					GHR-Sign in
				</span>


                <div class="wrap-input100 validate-input m-b-20" >

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>




				<div class="wrap-input100 validate-input m-b-25" >
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>


                <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                             {{ __('Remember Me') }}
                        </label>
                                
                </div>


                <br>

              
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Log in
					</button>
				</div>

                        

                <br>

				<div class="form-group m-t-10 mb-0 row">
					<div class="col-sm-7">

                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <small>Forgot your password ?</small>
                                    </a>
                    @endif
						<!-- <a href="page-recoverpw.php" class="text-muted"><small>Forgot your password ?</small></a> -->
					</div>
					<div class="col-sm-5 m-t-0">
                    <a class="btn btn-link" href="{{ route('register') }}">
                                    <small>Create an Account</small>
                                    </a>
					</div>
				</div>

			
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login-form-v9/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-form-v9/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login-form-v9/vendor/bootstrap/js/popper.js"></script>
	<script src="login-form-v9/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-form-v9/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-form-v9/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-form-v9/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login-form-v9/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login-form-v9/js/main.js"></script>








    


                
@endsection



