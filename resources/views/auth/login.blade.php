<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Masuk Ke Dashboard Kelurahaan Langgini</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/admin/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="/admin/assets/plugins/waves/waves.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="/admin/assets/css/alpha.min.css" rel="stylesheet">
        <link href="/admin/assets/css/custom.css" rel="stylesheet">
    </head>
    <body class="login-page sign-in">
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <div class="alpha-app">
            <div class="container">
                <div class="login-container">
                    <div class="row justify-content-center row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="card login-box">
                                <div class="card-body">
                                    <h5 class="card-title">Sign In</h5>
                                    <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control @error('email') is-invalid @enderror" id="password" placeholder="Password" required autocomplete="current-password" name="password" >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign In</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="/admin/assets/plugins/bootstrap/popper.min.js"></script>
        <script src="/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/admin/assets/plugins/waves/waves.min.js"></script>
        <script src="/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/admin/assets/js/alpha.min.js"></script>
    </body>
</html>