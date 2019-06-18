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
                                    <div class="panel-heading"><h3 class="panel-title">Edit Contents</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/update-contents/'.$item_id.'/'.$subItem_id.'/'.$content_id) }}" method="post">
                                        	@csrf
                                        	

                                            {{-- <input type="" name="item_id" value="{{ $editContentsTwo->item_name }}"> --}}
                                           {{--  <div class="form-group">
                                                <label for="exampleInputEmail1">Item Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="item_id" value="{{ $editContentsTwo->item_name }}">
                                            </div> --}}

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $editContentsTwo->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Hints</label>
                                                {{-- <input type="textarea" class="form-control" id="exampleInputEmail1" name="hints" value="{{ $editContentsOne->hints }}"> --}}
                                                 <textarea class="form-control" id="exampleInputEmail1" name="hints">{{ $editContentsTwo->hints }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                {{-- <input type="textarea" class="form-control" id="exampleInputEmail1" name="name" value="{{ $editContentsOne->name }}"> --}}
                                                <textarea class="form-control" id="exampleInputEmail1" name="name">{{ $editContentsTwo->name }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Designation</label>
                                                {{-- <input type="textarea" class="form-control" id="exampleInputEmail1" name="designation" value="{{ $editContentsOne->designation }}"> --}}
                                                <textarea class="form-control" id="exampleInputEmail1" name="designation">{{ $editContentsTwo->designation }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile 1</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="mobile_one" value="{{ $editContentsTwo->mobile_one }}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile 2</label><br>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="mobile_two" value="{{ $editContentsTwo->mobile_two }}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone 1</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="phone_one" value="{{ $editContentsTwo->phone_one }}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone 2</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="phone_two" value="{{ $editContentsTwo->phone_two }}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email 1</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="email_one" value="{{ $editContentsTwo->email_one }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email 2</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="email_two" value="{{ $editContentsTwo->email_two }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Website</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="website" value="{{ $editContentsTwo->website }}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Order ID</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" name="order_id" placeholder="Enter Order ID" value="{{ $editContentsTwo->order_id }}" required="">
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