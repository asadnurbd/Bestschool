<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Best School | Dhaka Best School</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



<!--
  ===========
  new
  =========== -->
  <!-- Bootstrap CSS -->
  <link href="{{ asset('rev') }}/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('rev') }}/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('rev') }}/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{ asset('rev') }}/admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('rev') }}/admin/{{ asset('rev') }}/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="{{ asset('rev') }}/admin/{{ asset('rev') }}/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('rev') }}/admin/{{ asset('rev') }}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('rev') }}/admin/css/owl.carousel.css" type="text/css">
  <link href="{{ asset('rev') }}/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('rev') }}/admin/css/fullcalendar.css">
  <link href="{{ asset('rev') }}/admin/css/widgets.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/admin/css/style.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/admin/css/style-responsive.css" rel="stylesheet" />
  <link href="{{ asset('rev') }}/admin/css/xcharts.min.css" rel=" stylesheet">
  <link href="{{ asset('rev') }}/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">


<!--
  ===========
  new
  =========== -->

  <!-- Favicons -->
  <link href="{{ asset('rev') }}/img/ico.png" rel="icon">
  <link href="{{ asset('rev') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('rev') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('rev') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('rev') }}/css/style.css" rel="stylesheet">

 <!-- map cssssssssssssssssssssssssssssssssssssssssssss  -->

 <!-- Bootstrap CSS -->
 <link href="{{ asset('rev') }}/user/css/bootstrap.min.css" rel="stylesheet">
 <!-- bootstrap theme -->
 <link href="{{ asset('rev') }}/user/css/bootstrap-theme.css" rel="stylesheet">
 <!--external css-->
 <!-- font icon -->
 <link href="{{ asset('rev') }}/user/css/elegant-icons-style.css" rel="stylesheet" />
 <link href="{{ asset('rev') }}/user/css/font-awesome.min.css" rel="stylesheet" />
 <!-- Custom styles -->
 <link href="{{ asset('rev') }}/user/css/style.css" rel="stylesheet">
 <link href="{{ asset('rev') }}/user/css/style-responsive.css" rel="stylesheet" />



   <!-- =============================================== -->
 <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>

<style media="screen">
#header{

  background:#303a48;
}

body{

  background:#F5F5DC;
}

</style>



</head>


<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:bestschool@gmail.com">bestschool@gmail.com</a>
        <i class="fa fa-phone"></i> +88 01797 741298
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/school') }}" class="scrollto"><span style="color:white;">Best</span><span>School</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="{{ url('/school') }}" style="color:white;">Home</a></li>
          <li><a href="{{ url('/about') }}" style="color:white;">About Us</a></li>
          <li><a  href="{{ route('review') }}" style="color:white;">Parents Review</a></li>
          <li><a href="{{ url('/privacy') }}" style="color:white;">Privacy Policy</a></li>
          <li><a href="{{ route('post_home') }}" style="color:white;">Blog</a></li>
          <li><a href="{{ url('/contact') }}" style="color:white;">Contact</a></li>

          <li >

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"style="color:white;">
                                <a class="nav-link" href="#myaccount" style="color:white;">{{ __('My Account') }}</a>
                                <ul>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <hr>
                                    <li><a href="{{ route('register') }}">Regiter</a></li>

                                </ul>
                              </li>
                            </li>
                            @if (Route::has('register'))

                            @endif
                        @else
                            <li class="nav-item dropdown" style="color:white;">
                                <a style="color:white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/home') }}">
                                        {{ __('My Profile') }}
                                    </a>

                                <br>
                                <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log Out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
