@extends('layouts.masteradmin')


@section('content')


<h1><b>Add Category</b> </h1>
					
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <form id="demo-form2" action="{{ url ('/category/add') }}"  method="POST" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data>
                            {{ csrf_field() }}
                            <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="id">Category Id <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" id="id" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">category Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="name" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="image" name="image" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="service_num" class="col-form-label col-md-3 col-sm-3 label-align">Service Number</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="service_num" class="form-control" type="number" name="service_num">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="service_name" class="col-form-label col-md-3 col-sm-3 label-align">Service Name</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="service_name" class="form-control" type="text" name="service_name">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Details" class="col-form-label col-md-3 col-sm-3 label-align">Service Details</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Details" class="form-control" type="text" name="Details">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="status" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="status" class="form-control" type="checkbox" name="status">
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

