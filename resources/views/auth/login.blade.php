<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{url('/')}}/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{url('/')}}/global_assets/js/main/jquery.min.js"></script>
    <script src="{{url('/')}}/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{url('/')}}/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="{{url('/')}}/assets/js/app.js"></script>
    <script src="{{url('/')}}/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i
                                    class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Login to your account</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="enter email">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>


                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="enter password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>


                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        Remember
                                    </label>
                                </div>

                                <a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                            </div>



                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Don't have an account?</span>
                            </div>

                            <div class="form-group">
                                <a href="#" class="btn btn-light btn-block">Sign up</a>
                            </div>

                            <span class="form-text text-center text-muted">By continuing, you're confirming that you've
                                read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </div>
                    </div>
                </form>
                <!-- /login card -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
@extends('layouts.app')