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
                                <div class="flex items-center justify-end mt-4">
                                    <a class="btn btn-primary"  href="{{ url('auth/google') }}">
                                        <strong> Login With Google </strong>
                                    </a>
                                </div>
                            </form>
                            <div>
                                <p><a class="btn btn-success" href="{{ route('register') }}">I Don't have an account? sign up</a></p>
                            </div>

{{--                            <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">--}}
{{--                                <strong>Login With Google</strong>--}}
{{--                            </a>--}}
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

