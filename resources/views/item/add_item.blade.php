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
                                    <div class="panel-heading"><h3 class="panel-title">Add Item</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/insert-item') }}" method="post">
                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="item_name" placeholder="Enter Name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Updated Date</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="item_updated_date" placeholder="Enter Date">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contents for </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('') }}" method="POST">
        @csrf
          <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Items</label>
                    <select name="category_id" class="form-control">
                        <option disabled="" selected=""></option>
                        @php
                        $allitems = DB::table('items')->get();
                        @endphp
                        @foreach($allitems as $value)
                        <option value="{{ $value->id }}">{{ $value->item_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Title" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hints</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Hints" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Designation" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Mobile 1" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Mobile 2" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Phone 1" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Phone 2" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Email 1" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Email 2" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Website</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Website" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Details</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Details" required=""></textarea>
                </div>
            </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection