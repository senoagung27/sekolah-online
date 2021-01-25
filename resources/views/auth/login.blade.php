<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Saksi Apps</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('login_library/login.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary" onload="getLocation()">

  <div class="container">
    

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    {{-- <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1> --}}

                    <img style="width:50%; margin-bottom: 3%" src="{{asset('/login_library/fien.png')}}" alt="">
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                  @csrf
                    <div class="form-group">
                      <input type="text" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>

                    <input type="hidden" id="long" name="longitude" value="">

                    <input type="hidden" id="lat" name="latitude" value="">
                   
                    

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

  <script>
  function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } 
}

function showPosition(position) {
    document.getElementById("long").value = position.coords.latitude;
    document.getElementById("lat").value = position.coords.longitude;
}
  </script>


</body>

</html>
