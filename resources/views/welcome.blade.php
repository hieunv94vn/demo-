<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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

                  <div class="user" data-toggle="modal" data-target=".login-modal">
                    <p>Login / Register</p>
                  </div>

                  <div class="modal fade login-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Become a member via ...</h4>
                        </div>
                        <div class="modal-body login">
                          <div class="col-md-6 left">
                            <div class="social-container">
                                <div class="fb-icon-bg text-center">
                                     <a href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                                <div class="fb-bg"></div>
                                <div class="twi-icon-bg text-center">
                                    <a href="{{ url('/auth/twitter') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                                <div class="twi-bg"></div>
                                    <div class="g-icon-bg text-center">
                                       <a href="{{ url('/auth/google') }}"><i class="fa fa-google" aria-hidden="true"></i>
                                    </div>
                                <div class="g-bg"></div>
                            </div>
                          </div>
                          <div class="col-md-6 right">
                            <form action="{{ url('/login') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" placeholder="">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="remember"> Remember me
                                </label>
                              </div>
                              <button type="submit" class="btn btn-default">Sign In</button>
                              <a href="javascript:;" class="btn btn-default sign-up-button">Sign Up</a>
                            </form>
                          </div>
                        </div>
                        <div class="modal-body sign-up">
                          <form>
                            <div class="col-md-6 left">
                              <div class="form-group">
                              <label for="register_name">Name</label>
                                <input id="register_name" type="text" class="form-control" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="register_email">Email address</label>
                                <input id="register_email" type="email" class="form-control" placeholder="Email">
                              </div>
                            </div>

                            <div class="col-md-6 right">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="cfpassword">Confirm Password</label>
                                <input type="password" id="cfpassword" class="form-control" placeholder="Password">
                              </div>
                            </div>
                            <div class="button-action text-center">
                              <button type="submit" class="btn btn-default">Register</button>
                              <button type="reset" class="btn btn-default">Reset</button>
                              <a href="javascript:;" class="back-to-login btn btn-default">Back to login</a>
                            </div>
                            
                          </form>
                        </div>
                        <div class="modal-footer">
                          
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->

                  <div class="menu-bar">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>

                </div>

              </div>
              <!-- end of header -->

              <div class="welcome text-center">
              <div class="decoration-line">
                <p>WELCOME TO OUR LEARNING SYSTEM</p>
              </div>
                <h3 class="animated bounceIn">FRAMGIA</h3>
                <a class="elf-button" href="#">E - LEARNING</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- end of banner -->

    <div class="info container-fluid text-center">
      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <h3>LEARNING ENGLISH IS VERY EASY</h3>
            <p>Welcome to our e-learning english system for Vietnamese.Text hints (like those in text fields and labels) and disabled text have even lower visual prominence with an opacity of 38%.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end of info -->

    <div class="categories container-fluid">
      <div class="row">
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-1.jpg" alt="The Pulpit Rock">
            <figcaption><p>LANDSCAPE</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-2.jpg" alt="The Pulpit Rock">
            <figcaption><p>SPORT</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-3.jpg" alt="The Pulpit Rock">
            <figcaption><p>CAREER</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-4.jpg" alt="The Pulpit Rock">
            <figcaption><p>TECHNOLOGY</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-5.jpg" alt="The Pulpit Rock">
            <figcaption><p>FAMILY</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-6.jpg" alt="The Pulpit Rock">
            <figcaption><p>UNIVERSITY</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-7.jpg" alt="The Pulpit Rock">
            <figcaption><p>MUSIC</p></figcaption>
          </figure>
          <figure class="cat-box col-md-3">
            <img class="img-responsive" src="img/cat-8.jpeg" alt="The Pulpit Rock">
            <figcaption><p>SOCIAL</p></figcaption>
          </figure>
      </div>
    </div>
    <!-- end of categories -->

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
