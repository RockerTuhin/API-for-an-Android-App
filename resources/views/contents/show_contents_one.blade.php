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
                        
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="{{-- panel-title --}}">Item: {{ $allContentsOne->first()->item_name }}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                        	
                                                            <th>Contents</th>
                                                           
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @foreach($allContentsOne as $item)
                                                        <tr>
                                                        	
                                                            {{-- <td>{{ $item->item_name }}</td> --}}
                                                            <td> 

                                                                 Order ID: {{ $item->order_id }} <br>
                                                                 Title: {{ $item->title }}     <br>
                                                                 Hint: {{ $item->hints }}  <br>
                                                                 Name: {{ $item->name }}  <br>
                                                                 Designation: {{ $item->designation }}     <br>
                                                                 Mobile: 
                                                                 @php
                                                                 if($item->mobile_one == '+880' || $item->mobile_one == Null) 
                                                                 {
                                                                    
                                                                 }
                                                                 else
                                                                 {@endphp
                                                                    {{ $item->mobile_one }}@php
                                                                 }
                                                                 // @php
                                                                 // }
                                                                 if($item->mobile_two == '+880' || $item->mobile_two == Null) 
                                                                 {
                                                                    
                                                                 }
                                                                 else{
                                                                    if(($item->mobile_one != '+880' && $item->mobile_one != Null) && ($item->mobile_two != '+880' && $item->mobile_two != Null)){
                                                                    @endphp
                                                                    ,@php } @endphp
                                                                    {{ $item->mobile_two }}
                                                                    @php
                                                                 }
                                                                @endphp
                                                                <br>
                                                                  Phone: 
                                                                 @php
                                                                 if($item->phone_one == '+880' || $item->phone_one == Null) 
                                                                 {
                                                                    
                                                                 }
                                                                 else
                                                                 {@endphp
                                                                    {{ $item->phone_one }}@php
                                                                 }
                                                                // }
                                                                 if($item->phone_two == '+880' || $item->phone_two == Null) {}
                                                                else
                                                                {
                                                                    if(($item->phone_one != '+880' && $item->phone_one != Null) && ($item->phone_two != '+880' && $item->phone_two != Null)){
                                                                     @endphp
                                                                     ,@php } @endphp
                                                                     {{ $item->phone_two }}
                                                                     @php
                                                                 }
                                                                @endphp
                                                                <br>
                                                                Email: 
                                                                 @php
                                                                 if($item->email_one == Null) 
                                                                 {
                                                                    
                                                                 }
                                                                 else
                                                                 {@endphp
                                                                    {{ $item->email_one }}@php
                                                                 }
                                                                 
                                                                 if($item->email_two == Null) {}
                                                                else{
                                                                    if($item->email_one != Null && $item->email_two != Null){
                                                                     @endphp
                                                                     ,@php } @endphp
                                                                     {{ $item->email_two }}
                                                                     @php
                                                                 }
                                                                @endphp
                                                                <br>
                                                                Website: 
                                                                 @php
                                                                 if($item->website == 'http://' || $item->website == Null) 
                                                                 {
                                                                    
                                                                 }
                                                                 else
                                                                 {@endphp
                                                                    {{ $item->website }}@php
                                                                 }
                                                                 @endphp
                                                                 {{-- <br>
                                                                 Order ID: {{ $item->order_id }} --}}
                                                            </td>
                                                            <td>
                                                                <a href="{{ URL::to('/edit-contents-one/'.$item->item_id.'/'.$item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                                <a href="{{ URL::to('/delete-contents-one/'.$item->item_id.'/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->


                    </div> <!-- container -->
                               
                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

@endsection