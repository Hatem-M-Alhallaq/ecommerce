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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
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

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
                <img src="{{url('/')}}/global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-display4"></i>
                        <span class="d-md-none ml-2">Go to website</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-user-tie"></i>
                        <span class="d-md-none ml-2">Contact admin</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-cog3"></i>
                        <span class="d-md-none ml-2">Options</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Registration form -->
                <form class="login-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i
                                    class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Create account</h5>
                                <span class="d-block text-muted">All fields are required</span>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Your credentials</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left ">
                                <div class="col-md-12">
                                    <input id="name" type="text" placeholder="Username"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                --}}
                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    {{-- autocomplete="new-password" --}}
                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required placeholder="Repeat password">
                                        <div class="form-control-feedback">
                                            <i class="icon-mention text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Your contacts</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">

                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="Your email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Additions</span>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" checked
                                            data-fouc>
                                        Send me <a href="#">test account settings</a>
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" checked
                                            data-fouc>
                                        Subscribe to monthly newsletter
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" data-fouc>
                                        Accept <a href="#">terms of service</a>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn bg-teal-400 btn-block btn-primary">{{ __('Register') }} <i
                                    class="icon-circle-left2 ml-2"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
                            href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                    </span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link"
                                target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                        <li class="nav-item"><a href="../../../../../../docs/index.html" class="navbar-nav-link"
                                target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                        <li class="nav-item"><a
                                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                                class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i
                                        class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>