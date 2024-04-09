

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <link rel="icon" type="image/png" href="login_form/images/icons/favicon.ico"/>
    
    <link rel="stylesheet" type="text/css" href="login_form/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="login_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" type="text/css" href="login_form/vendor/animate/animate.css">
     
    <link rel="stylesheet" type="text/css" href="login_form/vendor/css-hamburgers/hamburgers.min.css">
    
    <link rel="stylesheet" type="text/css" href="login_form/vendor/animsition/css/animsition.min.css">
   
    <link rel="stylesheet" type="text/css" href="login_form/vendor/select2/select2.min.css">
     
    <link rel="stylesheet" type="text/css" href="login_form/vendor/daterangepicker/daterangepicker.css">
  
    <link rel="stylesheet" type="text/css" href="login_form/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_form/css/main.css">
   
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action ="{{route('register')}}">
                    @csrf
                    <span class="login100-form-title">
                        Sign Up
                    </span>
                    <div>
                        @error('name')
                        <p class ="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid name is required">
                        <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name">
                        <span class="focus-input100" data-placeholder="Name"></span>
                    </div>
                    <div>
                        @error('email')
                        <p class ="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div>
                        @error('password')
                        <p class ="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div>
                        @error('password_confirmation')
                        <p class ="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Confirm Password is required">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                            
                        </button>
                    </div>
                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Already have an account?
                        </span>
                        <a href="{{route('login')}}" class="txt3">
                            Sign in now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
   
    <script src="login_form/vendor/jquery/jquery-3.2.1.min.js"></script>
    
    <script src="login_form/vendor/animsition/js/animsition.min.js"></script>
  
    <script src="login_form/vendor/bootstrap/js/popper.js"></script>
    <script src="login_form/vendor/bootstrap/js/bootstrap.min.js"></script>
  
    <script src="login_form/vendor/select2/select2.min.js"></script>
    
    <script src="login_form/vendor/daterangepicker/moment.min.js"></script>
    <script src="login_form/vendor/daterangepicker/daterangepicker.js"></script>
   
    <script src="login_form/vendor/countdowntime/countdowntime.js"></script>
    
    <script src="login_form/js/main.js"></script>

</body>
</html>
