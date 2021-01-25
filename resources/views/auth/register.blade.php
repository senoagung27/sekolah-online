<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('login_library/login.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register Form</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('register') }}">
                  @csrf
                    

                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name" required>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                          @endif
                      </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                          @endif
                    </div>                                       

                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Password Confirmation" required>
                      </div>
                   
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="LOGIN">                  
                                        
                  </form>
                  <hr>
                                    
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
