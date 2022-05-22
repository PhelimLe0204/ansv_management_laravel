
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}">

	<title>Login | Management</title>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="user/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="user/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">

                        <form name='loginForm' action="" method='POST' id="login_form">
                            @csrf
                            <img src="user/images/logo/ANSV_logo.png" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Đăng nhập</h4>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Email</label>
                                <input type="text" name="username" class="form-control" id="Email" placeholder="">
                                <span style="font-size: 12px; color: red;">@error('username') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" id="Password" placeholder="">
                                <span style="font-size: 12px; color: red;">@error('password') {{ $message }} @enderror</span>
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Ghi nhớ</label>
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Đăng nhập</button>
                            @if (Session::has('login_error'))
                                {!! Session::get('login_error') !!}
                            @endif
                            {{-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> --}}
                        </form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="user/js/vendor-all.min.js"></script>
<script src="user/js/plugins/bootstrap.min.js"></script>
<script src="user/js/ripple.js"></script>
<script src="user/js/pcoded.min.js"></script>



</body>

</html>
