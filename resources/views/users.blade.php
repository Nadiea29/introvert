@extends('layouts.masteradmin')


@section('content')
<div style="position: relative; top: 60px; right: -60px ">
<h1><b><u>All users/developers list</u></b></h1>

<h2><table>
  <tr>
  <th style="padding: 30px">Id</th>
    <th style="padding: 30px">Name</th>
    <th style="padding: 30px">Email</th>
    <th style="padding: 30px">Regitraion_Time</th>
    
   
  </tr>
  @foreach($data as $data)

  <tr>
  <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->updated_at}}</td>
    
  </tr>
  @endforeach
 
</table></h2>

</div>

				
@endsection
