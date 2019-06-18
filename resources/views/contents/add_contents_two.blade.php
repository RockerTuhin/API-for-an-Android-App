@extends('layouts.app')

@section('content')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                      
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        	<ul>
                        		@foreach ($errors->all() as $error)
                        		<li>{{ $error }}</li>
                        		@endforeach
                        	</ul>
                        </div>
                        @endif
                        <!-- Start Widget -->
                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add Contents</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/insert-contents') }}" method="post">
                                        	@csrf
                                        	
                                        	<input type="hidden" name="item_id" value="{{ $item_id }}">
                                        		
                                        
                                        	<input type="hidden" name="subItem_id" value="{{ $subItem_id }}">
                                        		

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Hints</label>
                                                {{-- <input type="textarea" class="form-control" id="exampleInputEmail1" name="hints" placeholder="Enter Hints"> --}}
                                                <textarea class="form-control" id="exampleInputEmail1" name="hints" placeholder="Enter Hints"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                {{-- <input type="textarea" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name"> --}}
                                               <textarea class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Designation</label>
                                                {{-- <input type="textarea" class="form-control" id="exampleInputEmail1" name="designation" placeholder="Enter Designation"> --}}
                                                <textarea class="form-control" id="exampleInputEmail1" name="designation" placeholder="Enter Designation"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile 1</label><br>+880
                                                <input type="text" class="" id="exampleInputEmail1" name="mobile_one" placeholder="Enter Mobile 1" style="width: 500px;height: 35px">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile 2</label><br>+880
                                                <input type="text" class="" id="exampleInputEmail1" name="mobile_two" placeholder="Enter Mobile 2" style="width: 500px;height: 35px">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone 1</label><br>+880
                                                <input type="text" class="" id="exampleInputEmail1" name="phone_one" placeholder="Enter Phone 1" style="width: 500px;height: 35px">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone 2</label><br>+880
                                                <input type="text" class="" id="exampleInputEmail1" name="phone_two" placeholder="Enter Phone 2" style="width: 500px;height: 35px">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email 1</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="email_one" placeholder="Enter Email 1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email 2</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="email_two" placeholder="Enter Email 2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Website</label><br>http://
                                                <input type="text" class="" id="exampleInputEmail1" name="website" placeholder="Enter Website" style="width: 500px;height: 35px">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Order ID</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" name="order_id" placeholder="Enter Order ID" value="0" required="">
                                            </div>

                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                        </div> 
                        <!-- End row-->


                    </div> <!-- container -->
                               
                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


@endsection