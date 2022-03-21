<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\service;
use App\Models\developer;
use App\Models\Order;
use App\Models\Test;
class DashboardController extends Controller
{
    public function index()
    {
      
        if(Auth::user()->hasRole('user')){

            $data=service::all();
            $data=developer::all();

            return view('userdash',compact('data'));
        }elseif(Auth::user()->hasRole('developer')){
            return view('developerdash');

        }elseif(Auth::user()->hasRole('manager')){
            return view('Managerdashboard');
        }

    }

//users
public function user(){
$data=user::all();
return view("users",compact("data"));}






//service
public function service()
{

    return view('service');
}

public function uploadservice(Request $request)
{

    $data=new service;
    
    request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    
    $data->title=$request->title;
    $data->category=$request->category;
    $data->details=$request->details;
    $data->price=$request->price;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('images/', $filename);

        $data->image= $filename;
    }
    $data->save();

    return redirect()->back()->with('message','service Added Successfully');



}

//developer
public function developer()
{

    return view('developer');
}

public function uploaddeveloper(Request $request)
{

    $data=new developer;
    
    request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    
    $data->name=$request->name;
    $data->category=$request->category;
    $data->details=$request->details;
    $data->contact=$request->contact;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('images/', $filename);

        $data->image= $filename;
    }
    $data->save();

    return redirect()->back()->with('message','developer Added Successfully');



}





//order
public function test(Request $request)
{

    return $request->toArray();
      $data = new test;
      $data->name=$request->name;
      $data->email=$request->email;
      $data->price=$request->price;
      $data->developer=$request->developer;
      $data->massage=$request->massage;
      $data->date=$request->date;
      $data->status='in progress';
    
      return 'hello';
      if(Auth::id()){
      $data->user_id=Auth::user()->id;
     }
      $data->save();
      return redirect()->back()->with('message','developer Added Successfully');
}




//showorder
public function showorders()
{
        $order=test::all();
    return view('showorders',compact('order'));
}

public function approved($id)
{
    $order=test::find($id);
$order->status='approved';
$order->save();
return redirect()->back();

}

public function cancel($id)
{
    $order=test::find($id);
$order->status='cancel';
$order->delete();
return redirect()->back();

}



//developer_view_orders
public function vieworder()
{
        $order=test::all();
    return view('vieworder',compact('order'));
}


public function accept($id)
{
    $order=test::find($id);
$order->status='accept';
$order->save();
return redirect()->back();

}
public function working($id)
{
    $order=test::find($id);
$order->status='Working';
$order->save();
return redirect()->back();

}
public function deliver($id)
{
    $order=test::find($id);
$order->status='deliver';
$order->save();
return redirect()->back();

}






}