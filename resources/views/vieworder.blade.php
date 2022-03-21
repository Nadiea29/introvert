<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>HOMEPAGE</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('user/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/owl.css')}}">

  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
         
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
          
        <a class="navbar-brand" href="#"><img src="{{asset('user/assets/images/rsz_1logo_with_tag.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('chatify') }}">message Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('vieworder')}}">View Orders</a>
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
              <h1>View orders</h1>
            </div>
          </div>
           </div>
          <div  style="padding center: 20px;" align="center;">
              <table style=" background-color: #dddddd;"  >
                 
                  <tr>
                      <th style="padding:10px; font-size: 20px;  border:3px solid black; text-align: center;">User Name</th>
                      <th style="padding:10px; font-size: 20px; color: black; border:3px solid black;   text-align: center;">User Email</th>  
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Order Details</th>
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Price</th>
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Status</th>
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Accept</th>
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Working</th>
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Deliver</th>
                   
</tr>
@foreach($order as $orders)
<tr>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->name}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->email}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color:#BA4A00 ;">{{ $orders->massage}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->price}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->status}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;"><a class="bt btn-success" href="{{url('accept',$orders->id)}}">Accept</a></td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;"><a class="bt btn-success" href="{{url('working',$orders->id)}}">Working</a></td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;"><a class="bt btn-success" href="{{url('deliver',$orders->id)}}">Deliver</a></td>

</tr>
@endforeach  
</tr>
</div>
</div>
</div></div></div></div>
