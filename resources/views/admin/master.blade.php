<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{asset('assets/app_images/app_icon.png')}}" sizes="30x30">
    <title>{{ config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/assets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/assets/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/dist/css/AdminLTE_theme.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/assets/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/iCheck/all.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('/assets/bower_components/select2/dist/css/select2.min.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
    <script src="{{asset('/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Autocomplete css -->
    <link rel="stylesheet" href="{{asset('assets/autocomplete/autocomplete.css')}}">
    <!-- Autocomplete js -->
    <script src="{{asset('assets/autocomplete/autocomplete.js')}}"></script>
    <!-- cookie js -->
    <script src="{{asset('/assets/bower_components/jquery/dist/jquery.cookie.min.js')}}"></script>
    <!-- Pace style -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/pace/pace.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('style')

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('admin') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img src="{{asset('assets/app_images/app_icon.png')}}" style="width: 50px;height: 50px;">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <img src="{{asset('assets/app_images/app_logo.png')}}" style="width: 230px;height: 50px;">
                </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <img src="#" class="user-image" alt="User Image"> -->
                                <span class="hidden-xs">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">

                                <!-- User image -->
                                <li class="user-header">
                                    <!-- <img src="#" class="img-circle" alt="User Image"> -->
                                    <p>{{Auth::user()->name}}</p>
                                </li>
                                <!-- Menu Body -->
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                   <div class="pull-left">
                                        <!-- <a href="#" data-toggle="modal" data-target="#PasswordModel" class="btn btn-default btn-flat">Change Password</a> -->
                                    </div>
                                    <div class="pull-right">                                        
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>  
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @include('admin.sidemenu') 


        <div class="content-wrapper">
            <section class="content-header">
                @yield('body')
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs"></div>
            <strong> &copy; {{ date('Y') }} <a href="#"> {{ config('app.name') }}</a> </strong>
        </footer>
        <div class="control-sidebar-bg"></div>

        <!-- IMAGE POPUP MODAL -->
        <button type="button" class="btn btn-info btn-lg" style="display: none;" id="image_popup_btn" data-toggle="modal" data-target="#image_popup">Open Modal</button>
        <div id="image_popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <div class="close-stle">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail" style="margin-bottom: 0px;width: 620px;max-height: 620px;" id="image_popup_image"></div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <!-- IMAGE POPUP MODAL -->
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/assets/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/assets/dist/js/demo.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{asset('/assets/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('/assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- bootstrap time picker -->
    <script src="{{asset('/assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- CK Editor -->
    <script src="{{asset('/assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <!-- PACE -->
    <script src="{{asset('/assets/bower_components/PACE/pace.min.js')}}"></script>
    <!-- Moment -->
    <script src="{{asset('/assets/bower_components/moment/moment.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{asset('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    @stack('scripts')

    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker();
            $('.select2').select2();
            $('.sidebar-menu').tree();

            // jquery clock
            var interval = setInterval(function() {
              var momentNow = moment();
              $('#ShowClock').html(momentNow.format('YYYY MMMM DD')+'&nbsp;&nbsp;'+momentNow.format('dddd').substring(0,3).toUpperCase()+'&nbsp;&nbsp;'+momentNow.format('hh:mm:ss A'));
            }, 100);
            // jquery clock

            //Timepicker
            $('.timepicker').timepicker({ showInputs: false });


            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 15, locale: { format: 'DD/MM/YYYY HH:mm' }})

            // alert message auto disable after 4 Sec
            setTimeout(function(){ $('.new-alert').css("display", "none"); }, 4000);

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
              checkboxClass: 'icheckbox_minimal-red',
              radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
              checkboxClass: 'icheckbox_flat-blue',
              radioClass   : 'iradio_flat-blue'
            })
        });

        $(document).ajaxStart(function () {
          Pace.restart();
        })
        </script>

        <script type="text/javascript">
        function view_image_popup(url)
        {
            $("#image_popup_image").html('<img src="'+url+'" style="max-width: 610px !important;max-height: 610px !important;">');
            $("#image_popup_btn").click();
        }
        </script>
</body>
</html>