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
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('/assets/plugins/iCheck/square/blue.css')}}">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <style type="text/css">
            .login-box, .register-box {width: 500px !important;}
            .form-control{height: 50px !important;border-top-right-radius: 4px !important;border-bottom-right-radius: 4px !important;}
            .input-group-addon {/*width: 50px !important;*/border-top-left-radius: 4px;border-bottom-left-radius: 4px;}
            .login-box-body{width: 500px !important;border-top: 5px solid;border-bottom: 5px solid;}
            .btn{height: 50px !important;border-radius: 4px !important;}
            .ip-blocked{width: 100%;margin-top: -85px;margin-bottom: -59px;}
            .login-logo-image{width: 230px;/*height: 50px;*/}
        </style>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
        
            
        
        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-logo">
                <img src="{{asset('/assets/app_images/app_login_logo.png')}}" class="login-logo-image" >
                <h3>LOGIN TO {{ config('app.name') }}</h3>
                <hr>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        </div>

        <!-- jQuery 3 -->
        <script src="{{asset('/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script>
            $(document).ready(function () { setTimeout(function(){ $('.new-alert').css("display", "none"); }, 4000); });
        </script>
    </body>
</html>