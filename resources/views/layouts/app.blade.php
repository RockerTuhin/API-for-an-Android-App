<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NSTU DIARY</title>
    {{-- <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet"> --}}

        <!-- Links -->
        <!-- Base Css Files -->
        <link href="{{ asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
        <!-- Font Icons -->
        <link href="{{ asset('public/admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('public/admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('public/admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
        <!-- animate css -->
        <link href="{{ asset('public/admin/css/animate.css') }}" rel="stylesheet" />
        <!-- Waves-effect -->
        <link href="{{ asset('public/admin/css/waves-effect.css') }}" rel="stylesheet">
        <!-- Custom Files -->
        <link href="{{ asset('public/admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('public/admin/js/modernizr.min.js') }}"></script>
        <link href="{{ asset('public/admin/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="fixed-left">
        
    <!-- Begin page -->
    <div id="wrapper">
        @guest

        @else
                    <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                {{-- <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div> --}}
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                {{-- <a class="logo"><span>Result Prediction System </span></a> --}}
                                <a class="logo" style="margin-left: 525px;">NSTU DIARY</a>
                            </div>
                            {{-- <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form> --}}

                            <ul class="nav navbar-nav navbar-right pull-right">
                               {{--  <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li> --}}
                                <li class="dropdown">
                                    
                                    <a href="javascript:void(0)" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ URL::to('public/admin/images/rose.jpg') }}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::to('/change-password') }}"><i class="md md-settings"></i> Change Password</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{ URL::to('public/admin/images/rose.jpg') }}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ URL::to('/change-password') }}"><i class="md md-settings"></i> Change Password</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                           {{--  <li>
                                <a href="" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-users"></i></i><span> Item </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Add Item</a></li> 
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Sub Item </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Add SubItem</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Sub(Sub Item) </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Add Sub(Sub Item)</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span>Contents</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Add Contents</a></li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="{{ URL::to('/edit-version') }}" class="waves-effect active"><i class="md md-home"></i><span> Update Version </span></a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/add-item') }}" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Add Item </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-crop-free"></i><span>All Items</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                @php
                                $allItems = DB::table('items')->get();
                                @endphp
                                <ul>
                                    @foreach($allItems as $values)
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>{{ $values->item_name }}</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{ URL::to('/edit-item/'.$values->id) }}"><span>Edit {{ $values->item_name }}</span></a></li>
                                            <li><a id="delete" href="{{ URL::to('/delete-item/'.$values->id) }}"><span>Delete {{ $values->item_name }}</span></a></li>
                                            <li><a href="{{ URL::to('/add-subitem/'.$values->id) }}"><span>Add Sub Item</span></a></li>
                                            <li><a href="{{ URL::to('/add-contents-one/'.$values->id) }}"><span>Add Contents</span></a></li>
                                            <li><a href="{{ URL::to('/show-contents-one/'.$values->id) }}"><span>Show Contents</span></a></li>
                                            <li class="has_sub">
                                                <a href="javascript:void(0);" class="waves-effect"><span>All Sub Items</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                @php
                                                $allSubItems = DB::table('subItems')->where('item_id',$values->id)->get();
                                                @endphp
                                                <ul style="">
                                                    @foreach($allSubItems as $subValues)
                                                    <li class="has_sub">
                                                        <a href="javascript:void(0);" class="waves-effect"><span>{{ $subValues->subitem_name }}</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                                        <ul style="">
                                                            <li><a href="{{ URL::to('/edit-subitem/'.$values->id.'/'.$subValues->id) }}"><span>Edit {{ $subValues->subitem_name }}</span></a></li>
                                                            <li><a id="delete" href="{{ URL::to('/delete-subitem/'.$values->id.'/'.$subValues->id) }}"><span>Delete {{ $subValues->subitem_name }}</span></a></li>
                                                            <li><a href="{{ URL::to('/add-contents-two/'.$values->id.'/'.$subValues->id) }}"><span>Add Contents</span></a></li>
                                                            <li><a href="{{ URL::to('/show-contents-two/'.$values->id.'/'.$subValues->id) }}"><span>Show Contents</span></a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
        @endguest
        
        {{-- <footer class="footer text-right">
                    2015 © Moltran.
        </footer> --}}
        <main class="py-4">
            @yield('content')
        </main>
        {{-- <footer class="footer text-right">
                    2015 © Moltran.
        </footer> --}}
    </div>
        {{-- <footer class="footer text-right">
                    2015 © Moltran.
        </footer> --}}


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('public/admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/admin/js/waves.js') }}"></script>
        <script src="{{ asset('public/admin/js/wow.min.js') }}"></script>
        <script src="{{ asset('public/admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/chat/moment-2.2.1.js') }}"></script>
        <script src="{{ asset('public/admin/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ asset('public/admin/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('public/admin/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('public/admin/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

        <!-- sweet alerts -->
        <script src="{{ asset('public/admin/assets/sweet-alert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/sweet-alert/sweet-alert.init.js') }}"></script>

        <!-- flot Chart -->
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.selection.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

        <!-- Counter-up -->
        <script src="{{ asset('public/admin/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{ asset('public/admin/js/jquery.app.js') }}"></script>

        <!-- Dashboard -->
        <script src="{{ asset('public/admin/js/jquery.dashboard.js') }}"></script>

        <!-- Chat -->
        <script src="{{ asset('public/admin/js/jquery.chat.js') }}"></script>

        <!-- Todo -->
        <script src="{{ asset('public/admin/js/jquery.todo.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/datatables/dataTables.bootstrap.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <script>
          @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
            case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
            }
            @endif
        </script>
        <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
        </script>
</body>
</html>
