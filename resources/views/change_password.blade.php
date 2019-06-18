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
                      
                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                        	<ul>
                        		@foreach ($errors->all() as $error)
                        		<li>{{ $error }}</li>
                        		@endforeach
                        	</ul>
                        </div>
                        @endif --}}
                        <!-- Start Widget -->
                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Change Password</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/update-password/'.Auth::id()) }}" method="post">
                                        	@csrf
                                        	
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputEmail1" name="password" value="">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Retype Password</label>
                                                <input type="password" class="form-control" id="exampleInputEmail1" name="retype_password" value="">
                                            </div>
                                            

                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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