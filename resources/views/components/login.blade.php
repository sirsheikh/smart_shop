<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Shop | Login</title>

    <link href="{{asset('storage/inspinia/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/inspinia/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('storage/inspinia/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('storage/inspinia/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="text-center col-lg-12 col-md-12">
        <h1 class="logo-name">IUB Souvenir Shop</h1>
    </div>

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div class="">

                <!-- <h1 class="logo-name">SS</h1> -->

            </div>
            <h3>Welcome to IUB Souvenir Shop</h3>
           
            <p>Login in. To see it in action.</p>
            <form  action="{{route('loginCheck')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" name="user_name" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="user_password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('storage/inspinia/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('storage/inspinia/js/popper.min.js')}}"></script>
    <script src="{{asset('storage/inspinia/js/bootstrap.js')}}"></script>

</body>

</html>
