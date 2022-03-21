@extends('layouts.masteradmin')


@section('content')


<h1><b>Add Developer</b> </h1>
					
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            @if(session()->has('message'))
                            <div class= "alert alert-success">
                            <button type="button" class="close "  data-dismis="alert">x </button>
                            {{session()->get('message')}}
</div>
                            @endif
                            <form action="{{url('uploaddeveloper')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                         
                          
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                    <input id="name" class="form-control" type="text" name="name">
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label for="category" class="col-form-label col-md-3 col-sm-3 label-align">Service Category</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="category" class="form-control" type="text" name="category">
                                    </div>
                                </div>

                                  
                                <div class="item form-group">
                                    <label for="Details" class="col-form-label col-md-3 col-sm-3 label-align">Information</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="details" class="form-control" type="text" name="details">
                                    </div>
                                </div>
                               



                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="contact">Contact<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                    <input id="contact" class="form-control" type="num" name="contact">
                                    </div>
                                </div>
                                
                              
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="image" name="image" required="required" class="form-control">
                                    </div>
                                </div>
                               
                              
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
				
@endsection

