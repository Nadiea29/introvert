<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
  
//order
public function test(Request $request)
{

  // return $request->toArray();
  $request->validate([
    'name'=>['required','string'],
    'email'=>['required','email'],
    'price'=>['required','numeric'],
    // 'developer'=>['required','string'],
    'message'=>['required','string'],
    //'date'=>['required','string'],
  ]);


      $test = new Test;
      $test->name=$request->name;
      $test->email=$request->email;
      $test->price=$request->price;
      //$test->developer=$request->developer;
      $test->massage=$request->message;
      // $test->date=$request->date;
      $test->status='in progress';
    
     
      if($request->user()){
      $test->user_id=$request->user()->id;
     }
      $test->save();
      return redirect()->back()->with('message','Place order Added Successfully,we will deliver service very soo');
}

public function myorder()
{
  if(Auth::id())
  { 
    $userid=Auth::user()->id;
    $order=test::where('user_id',$userid)->get();

    return view('myorder',compact('order'));
  }
  else
  {
    return redirect()->back();
  }
  
}
public function cancel_order($id)
{
$order=test::find($id);
$order->delete();
return redirect()->back();

}


}
