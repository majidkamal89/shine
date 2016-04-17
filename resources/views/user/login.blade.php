<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendors/animate-css/animate.min.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
</head>

<body class="login-content">
<!-- Login -->
<div class="lc-block toggled" id="l-login">
    @if(count($errors) > 0)
    <div role="alert" class="alert alert-danger alert-dismissible">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span></button>
        <ul class="text-left">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form id="loginForm" method="post" action="{!! URL::to('login') !!}" enctype="multipart/form-data">
        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-person"></i></span>
            <div class="fg-line">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{!! Input::get('email') !!}">
            </div>
        </div>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-accessibility"></i></span>
            <div class="fg-line">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <i class="input-helper"></i>
                Keep me signed in
            </label>
        </div>

        <button type="submit" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></button>
    </form>

    <ul class="login-navigation">
        <li data-block="#l-register" class="bgm-red">Register</li>
        <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
    </ul>
</div>

<!-- Register -->
<div class="lc-block" id="l-register">
   <form id="singupForm" method="post" action="{!! URL::to('register') !!}" enctype="multipart/form-data">
   <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-person"></i></span>
        <div class="fg-line">
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-mail"></i></span>
        <div class="fg-line">
            <input type="email" name="email" class="form-control" placeholder="Email Address">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-accessibility"></i></span>
        <div class="fg-line">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
            Accept the license agreement
        </label>
    </div>

    <button type="submit" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></button>

    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Login</li>
        <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
    </ul>
    </form>
</div>

<!-- Forgot Password -->
<div class="lc-block" id="l-forget-password">
    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-email"></i></span>
        <div class="fg-line">
            <input type="text" class="form-control" placeholder="Email Address">
        </div>
    </div>

    <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>

    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Login</li>
        <li data-block="#l-register" class="bgm-red">Register</li>
    </ul>
</div>

<!-- Javascript Libraries -->
<script src="{{ asset('assets/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/vendors/waves/waves.min.js') }}"></script>

<script src="{{ asset('assets/js/functions.js') }}"></script>

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">IE SUCKS!</h1>
    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
    <ul class="iew-download">
        <li>
            <a href="http://www.google.com/chrome/">
                <img src="img/browsers/chrome.png" alt="">
                <div>Chrome</div>
            </a>
        </li>
        <li>
            <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="img/browsers/firefox.png" alt="">
                <div>Firefox</div>
            </a>
        </li>
        <li>
            <a href="http://www.opera.com">
                <img src="img/browsers/opera.png" alt="">
                <div>Opera</div>
            </a>
        </li>
        <li>
            <a href="https://www.apple.com/safari/">
                <img src="img/browsers/safari.png" alt="">
                <div>Safari</div>
            </a>
        </li>
        <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="img/browsers/ie.png" alt="">
                <div>IE (New)</div>
            </a>
        </li>
    </ul>
    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
</div>
<![endif]-->
</body>
</html>