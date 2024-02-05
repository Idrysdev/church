<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Church</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset('admin/img/favicon.ico')}}>
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/bootstrap.min.css')}}>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/font-awesome.min.css')}}>
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/adminpro-custon-icon.css')}}>
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/meanmenu.min.css')}}>
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/jquery.mCustomScrollbar.min.css')}}>
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/animate.css')}}>
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/normalize.css')}}>
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/form.css')}}>
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/style.css')}}>
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href={{asset('admin/css/responsive.css')}}>
    <!-- modernizr JS
		============================================ -->
    <script src={{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">

        <!-- Header top area start-->

        <!-- login Start-->
        <div class="login-form-area mg-t-50 mg-b-10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <form id="adminpro-form" class="adminpro-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="col-lg-4">
                            <div class="login-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="logo">
                                            <a href="#"><img src={{asset("admin/img/logo/logo.png")}} alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="login-title text-center bold">
                                            {{-- <h1>Espace de connexion</h1> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>E-mail</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                :value="old('email')" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            <i class="fa fa-envelope login-user" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Password</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            <i class="fa fa-lock login-user"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-button-pro">
                                            {{-- <button type="submit"
                                                class="login-button login-button-rg">Register</button> --}}
                                            <button type="submit"
                                                class="login-button login-button-lg">Connexion</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
        <!-- login End-->
    </div>
    </div>
    <!-- Footer Start-->

    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src={{asset("admin/js/vendor/jquery-1.11.3.min.js")}}></script>
    <!-- bootstrap JS
		============================================ -->
    <script src={{asset("admin/js/bootstrap.min.js")}}></script>
    <!-- meanmenu JS
		============================================ -->
    <script src={{asset("admin/js/jquery.meanmenu.js")}}></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src={{asset("admin/js/jquery.mCustomScrollbar.concat.min.js")}}></script>
    <!-- sticky JS
		============================================ -->
    <script src={{asset("admin/js/jquery.sticky.js")}}></script>
    <!-- scrollUp JS
		============================================ -->
    <script src={{asset("admin/js/jquery.scrollUp.min.js")}}></script>
    <!-- form validate JS
		============================================ -->
    <script src={{asset("admin/js/jquery.form.min.js")}}></script>
    <script src={{asset("admin/js/jquery.validate.min.js")}}></script>
    <script src={{asset("admin/js/form-active.js")}}></script>
    <!-- main JS
		============================================ -->
    <script src={{asset("admin/js/main.js")}}></script>
</body>

</html>