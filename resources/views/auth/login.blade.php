<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>D-IT - Login espace membre</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template') }}/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template') }}/css/helper.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Login</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                    @if ($errors->has('email'))
                                        <div class="text-danger"><strong>{{ $errors->first('email') }}</strong></div>


                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                        <div class="text-danger"><strong>{{ $errors->first('password') }}</strong></div>
                                    </span>
                                    @endif

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Se rappeler de moi !
                                    </label>
                                    <label class="pull-right">
                                        <a href="#">Mot de passe oublié ?</a>
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="{{ asset('template') }}/js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('template') }}/js/lib/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('template') }}/js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('template') }}/js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="{{ asset('template') }}/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="{{ asset('template') }}/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="{{ asset('template') }}/js/custom.min.js"></script>

</body>

</html>