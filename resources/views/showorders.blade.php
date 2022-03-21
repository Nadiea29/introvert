@extends('layouts.masteradmin')


@section('content')
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
                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Approved</th>

                      <th style="padding:10px; font-size: 20px; color: black;border:3px solid black;text-align: center;">Cancel</th>
</tr>
@foreach($order as $orders)
<tr>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->name}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->email}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color:#BA4A00 ;">{{ $orders->massage}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->price}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;">{{ $orders->status}}</td>
    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;"><a class="bt btn-success" href="{{url('approved',$orders->id)}}">Approved</a></td>

    <td style="padding:10px; border:1px solid black; font-size: 20px; color: #BA4A00 ;"><a class="bt btn-danger" href="{{url('cancel',$orders->id)}}">Cancel</a></td>
</tr>
@endforeach  
</tr>
</div>
</div>
</div></div></div></div>
@endsection