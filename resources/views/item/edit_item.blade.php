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
                                    <div class="panel-heading"><h3 class="panel-title">Edit Item: {{ $editItem->item_name }}</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/update-item/'.$editItem->id) }}" method="post">
                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="item_name" value="{{ $editItem->item_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Updated Date</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="item_updated_date" value="{{ $editItem->item_updated_date }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Order ID</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" name="order_id" placeholder="Enter Order ID" value="{{ $editItem->order_id }}" required="">
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