<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendors/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <!--page level css-->
    @yield('header_styles')
    <!-- end page level css -->
        
    </head>
    <body>
    {{--*/ $user = Auth::getUser(); /*--}}
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="{!! URL::to('/') !!}">Material Admin</a>
                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href=""></a>
                    </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner">
                    <div class="si-inner">
                        <div class="profile-menu">
                            <a href="">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/img/profile-pics/1.jpg') }}" alt="">
                                </div>
                                
                                <div class="profile-info">
                                    
                                    @if($user->name)
                                        {!! $user->name !!}
                                    @else
                                        Malinda Hollaway
                                    @endif
                                    
                                    <i class="md md-arrow-drop-down"></i>
                                </div>
                            </a>
                            
                            <ul class="main-menu">
                                <li>
                                    <a href=""><i class="md md-person"></i> View Profile</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-settings-input-antenna"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-settings"></i> Settings</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('logout') !!}"><i class="md md-history"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                        
                        <ul class="main-menu">
                            <li {!! (Request::is('/') ? 'class="active"' : '') !!}>
                                <a href="{!! URL::to('/') !!}"><i class="md md-home"></i> Home</a>
                            </li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-now-widgets"></i> Widgets</a>

                                <ul>
                                    <li><a href="#">Templates</a></li>
                                    <li><a class="active" href="#">Widgets</a></li>
                                </ul>
                            </li>
                            <li {!! (Request::is('country') ? 'class="active"' : '') !!}>
                               <a href="{!! URL::route('country') !!}"><i class="md md-today"></i> Countries</a>
                            </li>
                            <li {!! (Request::is('flight') ? 'class="active"' : '') !!}>
                               <a href="{!! URL::route('flight') !!}"><i class="md md-today"></i> Flights</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- Content -->
            @yield('content')

        </section>
        
        <!-- Javascript Libraries -->
        <script src="{{ asset('assets/js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        
        <script src="{{ asset('assets/vendors/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/flot/plugins/curvedLines.js') }}"></script>
        <script src="{{ asset('assets/vendors/sparklines/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/easypiechart/jquery.easypiechart.min.js') }}"></script>
        
        <script src="{{ asset('assets/vendors/fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/auto-size/jquery.autosize.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/sweet-alert/sweet-alert.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/flot-charts/curved-line-chart.js') }}"></script>
        <script src="{{ asset('assets/js/flot-charts/line-chart.js') }}"></script>
        <script src="{{ asset('assets/js/charts.js') }}"></script>
        
        <script src="{{ asset('assets/js/charts.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        <!-- begin page level js -->
        @yield('footer_scripts')
    </body>
  </html>