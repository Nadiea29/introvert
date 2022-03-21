<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('user/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/owl.css')}}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<br>
                            @if(session()->has('message'))
                            <div class= "alert alert-success">
                            <button type="button" class="close"  data-dismiss="alert">x </button>
                            {{session()->get('message')}}
</div>
                            @endif
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="{{asset('user/assets/images/rsz_1logo_with_tag.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('Managerdashboard') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#developer">Developer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('chatify') }}">message Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('myorder') }}">my Order</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Place Order</h1>
            </div>
          </div>
        
             <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      
<form class="main-form" action="{{ route('test') }}"   enctype="multipart/form-data"  method="post"  >

  
@csrf
  <div class="row mt-5 ">
    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
      <input type="text" name="name" class="form-control" placeholder="Full name">
    </div>
    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
      <input type="text" name="email" class="form-control" placeholder="Email address..">
    </div>
   
    
    
    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
      <input type="text" name="price" class="form-control" placeholder="price">
    </div>
    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
      <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
</form>
</div>
  </div> <!-- .page-section -->
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('user/js/custom.js')}}"></script>
    <script src="{{asset('user/js/owl.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>   
</body>
</html>