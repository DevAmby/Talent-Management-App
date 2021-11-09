@extends('layouts.auth')

@section('content')


	
<div class="container-login100" >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="POST" action="{{ route('register') }}">
                        @csrf
				<span class="login100-form-title p-b-37">
					Create an Account
				</span>

				<div class="wrap-input100 validate-input m-b-20" >
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
					
				</div>




                <div class="wrap-input100 validate-input m-b-20" >
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter Username">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
				
				</div>




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



                <div class="wrap-input100 validate-input m-b-25" >

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="re-type password">

                </div>



				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign up
					</button>
				</div>


                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20 text-center">
                        <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
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
