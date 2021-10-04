<!DOCTYPE html>
<html lang="en">

<head>
    <title>ReadNews</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Bootstrap icon -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('guruable2-01.0/assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('guruable2-01.0/assets/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('guruable2-01.0/assets/icon/icofont/css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('guruable2-01.0/assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('guruable2-01.0/assets/css/jquery.mCustomScrollbar.css')}}">
      <link rel="stylesheet" href="{{asset('my_style.css')}}">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Navbar -->
            @include('admin.layouts.navbar')
            <!-- /.Navbar -->

            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- /.Sidebar -->

            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{asset('guruable2-01.0/assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{asset('guruable2-01.0/assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{asset('guruable2-01.0/assets/pages/todo/todo.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('guruable2-01.0/assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{asset('guruable2-01.0/assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('guruable2-01.0/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('guruable2-01.0/assets/js/demo-12.js')}}"></script>
<script src="{{asset('guruable2-01.0/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- script tambahan sweet alert, bukan dari bawaan sb-admin-2 -->
<script src="{{asset('/js/swal.min.js')}}"></script>

<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
@stack('scriptTable')

</body>

</html>
