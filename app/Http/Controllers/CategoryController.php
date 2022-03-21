<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $category= category::all();
        return view('category.insert',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add');
    }

    public function insert(Request $request)
    {   

        
        $categories = new category();
        if($request->hasFile('image'))
        {

            $file = $request->file('image');
            $ext = $file->getClientoriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/',$filename) ;
            $categories->image = $filename;
        }

        $categories->id = $request->input('id');
        $categories->name= $request->input('name');
        $categories->service_num = $request->input('service_num');
        $categories->service_name = $request->input('service_name');
        $categories->Details = $request->input('Details');
        $categories->status = $request->input('status') == TRUE ?'1':'0';
        $categories->save();
        return redirect('/category/add')->with('status',"category service add succesfully");



    }
    






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
