<!DOCTYPE html>
<html lang="en">

<head>

	<title>NOGMS - Sign-In</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>

		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Rahul Makhija">

	<!-- font css -->
	<link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">
	<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
	<link rel="stylesheet" href="{{asset('assets/fonts/material.css')}}">
	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="main-style-link">
</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
                <form action="" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-4 f-w-400">
                                <span><strong>NOGMS</strong></span> &nbsp;|&nbsp;
                                sign-in</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="email address">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="form-group text-left mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Save credentials
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">request access</a></p>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/feather.min.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>


</body>

</html>
