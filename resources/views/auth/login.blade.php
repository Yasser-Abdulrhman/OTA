<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Minya Tours | Sign Up</title>
</head>

<body data-color="mainColor">
<!-- LOADER -->
<div class="loading dr-blue-2">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_four"></div>
            <div class="object object_three"></div>
            <div class="object object_two"></div>
            <div class="object object_one"></div>
        </div>
    </div>
</div>
<img class="center-image" src="img/1.jpg" alt="">
<div class="container">
    <div class="login-fullpage">
        <div class="row">
            <div class="login-logo"><img class="center-image" src="img/11.jpg" alt=""></div>
            <div class="col-xs-12 col-sm-7">
                <div class="f-login-content">
                    <div class="f-login-header">
                        <div class="f-login-title color-dr-blue-2">Sign in!</div>
                        <div class="f-login-desc color-grey">Please Sign in</div>
                    </div>
                    <x-guest-layout>
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                                <x-jet-authentication-card-logo />
                            </x-slot>

                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="flex items-center justify-center m-right">
                                <a href="{{ url('auth/google') }}">
                                    <svg aria-hidden="true" class="native svg-icon iconGoogle" width="120" height="50" viewBox="0 0 18 18"><path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 002.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"></path><path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 01-7.18-2.54H1.83v2.07A8 8 0 008.98 17z" fill="#34A853"></path><path d="M4.5 10.52a4.8 4.8 0 010-3.04V5.41H1.83a8 8 0 000 7.18l2.67-2.07z" fill="#FBBC05"></path><path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 001.83 5.4L4.5 7.49a4.77 4.77 0 014.48-3.3z" fill="#EA4335"></path></svg>
                                    <p class="text-center" style="text-transform: lowercase">Log in with Google</p>
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('auth/facebook') }}">
                                    <svg aria-hidden="true" class="svg-icon iconFacebook"  width="120" height="50" viewBox="0 0 18 18"><path d="M3 1a2 2 0 00-2 2v12c0 1.1.9 2 2 2h12a2 2 0 002-2V3a2 2 0 00-2-2H3zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5z" fill="#4167B2"></path></svg>
                                    <p class="text-center" style="text-transform: lowercase">Log in with facebook</p>
                                </a>
                            </div>

                            <form method="POST" action="{{}}">
                                @csrf

                                <div>
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-jet-button class="ml-4">
                                        {{ __('Log in') }}
                                    </x-jet-button>

                                </div>



                            </form>
                            <div>
                                <p><a class="btn btn-success" href="{{ route('register') }}">I Don't have an account? sign up</a></p>
                            </div>

                        </x-jet-authentication-card>
                    </x-guest-layout>


                </div>
            </div>
        </div>
    </div>
    <div class="full-copy">&copy; 2021 All rights reserved. ITI</div>
</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/jquery.viewportchecker.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.circliful.min.js"></script>
<script src="js/all.js"></script>
</body>

</html>

