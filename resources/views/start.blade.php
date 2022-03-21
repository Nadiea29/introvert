<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Introvert Technology</title>
    <!-- Bootstrap -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/flexslider.css')}}" type="text/css">
    <link href="{{asset('asset/css/styles.css?v=1.6')}}" rel="stylesheet">
    <link href="{{asset('asset/css/queries.css?v=1.6')}}" rel="stylesheet">
    <link href="{{asset('asset/css/jquery.fancybox.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <section class="navigation">
        <div class="container-fluid">
          <div class="row">
         
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
         
              <nav class="pull">
            
                <ul class="top-nav">
                @if (Route::has('login'))
              @auth
                <li><a href="{{ url('Managerdashboard') }}">Dashboard <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                @else
                <li><a href="{{ route('login') }}">Log in <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                @endif
                    @endauth
                  <li><a href="#getstarted">Get Started <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li><a href="#media">Media <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li><a href="#features">Features <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li class="nav-last"><a href="#design">Design <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                </ul>
              </nav>
            
            </div>
            @endif
          </div>
        </div>
      </section>
      <section class="hero" id="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-right">
              <a href="#"><i class="fa fa-navicon fa-2x nav_slide_button"></i></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h1 class="animated bounceInDown"><b><i>Introvert Technology</i></b></h1>
              <p class="animated fadeInUpDelay"> Always do jobs for Client's satisfaction. Customer's satisfaction is more important than the money for us. So that we always offer 100% Guarantee service, without satisfaction full fund refund guaranty</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-5 text-center">
              <a href="http://player.vimeo.com/video/87701971?title=0&amp;byline=0&amp;portrait=0&amp;color=1883ad&amp;autoplay=1" class="hero-play-btn various fancybox.iframe">Play Button</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <a href="" class="get-started-btn">Get Started</a>
            </div>
          </div>
        </div>
      </section>
      <section class="download-now" id="getstarted">
        <div class="container">
          <div class="row">
            <div class="col-md-8 wp1">
              <h1>
             WHO WE ARE???
              </h1>
              <p>We provide a to z services of IT Solutions. You can get any kind of digital service or IT <br>
                service from us. we are video creator, motion animator, graphics designer, App Developer, <br>
                web Developer, Digital Marketer and many more.</p>
              <p> We always do jobs for Client's satisfaction. Customer's satisfaction is more important than the money for us. So that we always offer 100% Guarantee service, without satisfaction full fund refund guaranty.</p>
              <a href="{{ url('https://www.fiverr.com/faijulmobin') }}" class="download-btn">Our protfolio</a>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonials" id="media">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div id="firstSlider">
                <ul class="slides">
                  <li>
                    <div class="avatar"><img src="{{asset('asset/img/av-blaz.png')}}" alt="Blaz Robar"></div>
                    <h1>Web design is the field that involves digital interfaces such as websites, apps, and services. By using HTML code to program websites and CSS to standardize its visual language, web design professionals are responsible for building digital experiences to be used by the public</h1>
                  </li>
                  <li>
                    <div class="avatar"><img src="{{asset('asset/img/av-pete.png')}}" alt="Pete Finlan"></div>
                    <h1>Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience</h1>
                  </li>
                  <li>
                    <div class="avatar"><img src="{{asset('asset/img/av-doge.png')}}" alt="Doge Finbar"></div>
                    <h1>Creating software applications. that software applications u can run on a mobile device, like a mobile application and Creating landing page website to huge database-driven custom websLive Web Projects on various technologies including WordPress, PHP</h1>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="features" id="features">
        <div class="container">
          <div class="row">
            <div class="col-md-6 features-leftcol wp2">
              <h1>So Dreamy</h1>
              <p class="margin-bottom">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h1>Apple Store</h1>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-6 features-rightcol wp3">
              <h1>More Buzz Words</h1>
              <p class="margin-bottom">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h1>Extra Startup Juice</h1>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="#" class="try-btn">Try Demo</a>
            </div>
          </div>
        </div>
      </section>
      <section class="design" id="design">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="secondSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4">
                      <div class="flat-box">
                        <div class="colourway colour1"></div>
                        <p class="title">Extra Startup Juice</p>
                        <p class="feature-text">Added Feature</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="flat-box">
                        <div class="colourway colour2"></div>
                        <p class="title">So Thirsty</p>
                        <p class="feature-text">Extra nice UI comes with the app</p>
                      </div>
                    </div>
                    <div class="col-md-4 design-content">
                      <h1>So flat you'll want to give it some shadows</h1>
                      <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4">
                      <div class="flat-box">
                        <div class="colourway colour3"></div>
                        <p class="title">Extra Startup Juice</p>
                        <p class="feature-text">Added Feature</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="flat-box">
                        <div class="colourway colour4"></div>
                        <p class="title">So Thirsty</p>
                        <p class="feature-text">Extra nice UI comes with the app</p>
                      </div>
                    </div>
                    <div class="col-md-4 design-content">
                      <h1>So flat you'll want to give it some shadows</h1>
                      <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-1 col-md-offset-11 text-right controls">
                <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. Maecenas diam est, venenatis vitae dui in, vestibulum mollis arcu. Donec eu nibh tincidunt, dapibus sem eu, aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>
            </div>
            <div class="col-md-3">
              <p>aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>
            </div>
            <div class="col-md-2 col-md-offset-3">
              <ul class="footer-nav">
                <li><a href="#">Get Started Tutorial</a></li>
                <li><a href="#">Introduction Video</a></li>
                <li><a href="#">See the Features</a></li>
                <li><a href="#">Download a Trial</a></li>
                <li><a href="#">Get in Touch!</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="#" class="badge-btn">Badge Button</a>
              <p class="footer-credit">Design by <a href="http://www.blazrobar.com">Blaz Robar</a></p>
            </div>
          </div>
        </div>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="{{asset('assetjs/jquery.fancybox.pack.js')}}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('asset/js/scripts.js?v=1.7')}}"></script>
      <script src="{{asset('asset/js/jquery.flexslider.js')}}"></script>
      <script src="{{asset('asset/js/jquery.smooth-scroll.js')}}"></script>
      <script src="{{asset('asset/js/modernizr.js')}}"></script>
      <script src="{{asset('asset/js/waypoints.min.js')}}"></script>
    </body>
  </html>
