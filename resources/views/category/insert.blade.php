@extends('layouts.masteradmin')


@section('content')

<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
    <div> <h2> category list</div>
<div><table border = "1">
<tr>
<td>Id</td>
<td> Name</td>
<td>Image</td>
<td>service_num</td>
<td>service_name</td>
<td>Details</td>
<td>status</td>
</tr>
@foreach ($category as $category)
<tr>
<td>{{ $category->id }}</td>
<td>{{ $category->name }}</td>
<td><img src="{{asset ('asset/uploads/'.$category->image)}}" ></td>
<td>{{ $category->service_num }}</td>
<td>{{ $category->service_name }}</td>
<td>{{ $category->Details }}</td>
<td>{{ $category->status }}</td>
</tr>
@endforeach
</table>
</body>
</div>
</html
@endsection
