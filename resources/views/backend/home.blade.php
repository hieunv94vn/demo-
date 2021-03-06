  <!doctype html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  <!--[if gt IE 8]><!-->
  <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('elearning/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('elearning/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('elearning/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('elearning/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('elearning/css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('elearning/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <style>
      .banner{
        min-height: 0;
        background-image: none;
        background-color: #A1887F;
        padding-top: 10px;
      }
      .banner .header .right{
        top: 15px;
      }
    </style>
  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <div class="banner container-fluid">
        <div class="row">
          <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header clearfix">
                <div class="left pull-left text-center">
                  <a href="index.html">FRAMGIA</a>
                  <p class="text-center">E-LEARNING SYSTEM</p>
                </div>
                
                
                <div class="right pull-right">
                  @if (Auth::guest())
                  <div class="user" data-toggle="modal" data-target=".login-modal">
                    <p>Login / Register</p>
                  </div>
                  @else
                  <div class="user">
                    <p>{{Auth::user()->name}}</p>
                  </div>
                  @endif
                  <div class="menu-bar">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
                </div>
              </div>
              <!-- end of header -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of banner -->
    <div class="subview container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="sidebar col-md-3">
              <ul>
                <li><a href="#"><img width="150px" height="150px" src="img/profile-picture.png"></a></li>
                <li><strong>{{ Auth::user()->name }}</strong></li>
                <li>Learned: 99 words</li>
                <li>Followed by: 100 people</li>
                <li>
                      <a href="{{ url('/logout') }}" onclick="event.preventDefault(); 
                      document.getElementById('logout-form').submit();">
                                            Logout
                      </a>

                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                      </form>
                 </li>
              </ul>
            </div>
            <div class="content col-md-9">
              <div class="title">
                <h3><strong>Activities</strong></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of content -->
    <footer class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="logo">
                <p>FRAMGIA</p>
                <p class="text-center">E-LEARNING SYSTEM</p>
              </div>
              <div class="copyright">
                <ul>
                  <li>Copyright 2016 By HiepNM &amp; HieuNV</li>
                  <li>All Rights Reserved</li>
                  <li>FramgiaVietnam</li>
                </ul>
              </div>

            </div>
            <div class="col-md-6 text-right">
              <img class="social-logo" src="img/facebook.png" alt="">
              <img class="social-logo" src="img/google.png" alt="">
              <img class="social-logo" src="img/twitter.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="fullscreen-menu">
      <div class="col-md-offset-4 col-md-4">
        <ul>
          <li><a href="#">CATEGORY</a></li>
          <li><a href="#">WORDLIST</a></li>
          <li><a href="#">LEADERBOARD</a></li>
          <li><a href="#">ABOUT US</a></li>
        </ul>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{asset('elearning/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('elearning/js/main.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
  </html>