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
                                    <div class="panel-heading"><h3 class="panel-title">Edit Version</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/update-version') }}" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Data Version</label>
                                                @php
                                                if($editVersion->data_version != Null)
                                                {@endphp
                                                    <input type="text" class="form-control" id="exampleInputEmail1" name="data_version" value="{{ $editVersion->data_version }}">@php
                                                }
                                                else
                                                {@endphp
                                                    <input type="text" class="form-control" id="exampleInputEmail1" name="data_version" value="">@php
                                                }@endphp
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Data URL</label>
                                                @php
                                                if($editVersion->data_url != Null)
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="data_url" value="{{ $editVersion->data_url }}">@php
                                                }
                                                else
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="data_url" value="">@php
                                                }@endphp
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Popup Notification Title</label>
                                                @php
                                                if($editVersion->popup_notification_title != Null)
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_title" value="{{ $editVersion->popup_notification_title }}">@php
                                                }
                                                else
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_title" value="">@php
                                                }@endphp
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Popup Notification Message</label>
                                                @php
                                                if($editVersion->popup_notification_message != Null)
                                                {@endphp
                                                     <textarea type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_message">{{ $editVersion->popup_notification_message }}</textarea>@php
                                                }
                                                else
                                                {@endphp
                                                     <textarea type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_message"></textarea>@php
                                                }@endphp
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Popup Notification Positive btn</label>
                                                @php
                                                if($editVersion->popup_notification_positive_btn != Null)
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_positive_btn" value="{{ $editVersion->popup_notification_positive_btn }}">@php
                                                }
                                                else
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_positive_btn" value="">@php
                                                }@endphp
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Popup Notification Positive URL Link</label>
                                                @php
                                                if($editVersion->popup_notification_positive_url_link != Null)
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_positive_url_link" value="{{ $editVersion->popup_notification_positive_url_link }}">@php
                                                }
                                                else
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_positive_url_link" value="">@php
                                                }@endphp
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Popup Notification Negative btn</label>
                                                @php
                                                if($editVersion->popup_notification_negative_btn != Null)
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_negative_btn" value="{{ $editVersion->popup_notification_negative_btn }}">@php
                                                }
                                                else
                                                {@endphp
                                                     <input type="text" class="form-control" id="exampleInputPassword1" name="popup_notification_negative_btn" value="">@php
                                                }@endphp
                                            </div>
                                            
                                            <button type="Update" class="btn btn-purple waves-effect waves-light">Update</button>
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


</script>

@endsection