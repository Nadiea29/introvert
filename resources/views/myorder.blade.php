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
              <a class="nav-link" href="{{ url('test') }}">place order</a>
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
              <h1>My order</h1>
            </div>
          </div>
           </div>
          <div  style="padding center: 20px; align='center">
              <table style=" background-color: #dddddd;"  >
                  <tr>
                  <tr>
                      <th style="padding:10px; font-size: 30px;  border:3px solid black; text-align: center;">My Order</th>
                      <th style="padding:10px; font-size: 30px; color: black; border:3px solid black;   text-align: center;">Price</th>
                      
                      <th style="padding:10px; font-size: 30px; color: black;border:3px solid black;text-align: center;">Status</th>
                      <th style="padding:10px; font-size: 30px; color: black;border:3px solid black;text-align: center;">Cancel Order</th>

</tr>
</div>
</div>
</div>
</div></div></div></div>
@foreach($order as $orders)
<tr>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->massage}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->price}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color:#BA4A00 ;">{{ $orders->status}}</td>
    <td style=" padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ; "><a class="bt btn-danger" href="{{url('cancel_order',$orders->id)}}">Cancel</a></td>
</tr>
@endforeach
</table>
</div>
</body>