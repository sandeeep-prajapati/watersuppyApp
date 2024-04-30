<!doctype html>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>User Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<!-- nav-bar start -->
@include('userviews.maincomponents.nav')
<!-- nav-bar end -->
@if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
    <div class="container register register-background custBack">
        <div class="row ">
            <h1 class="text-warning text-center"><b>Login Page</b></h1>
            <div class="col-md-1">
            </div>
            <div class="col-md-4" style="padding-top: 100px;">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2 class="">Happy to see you again...</h2>
                <p class="">if you are new here start with register your self first...</p>
                <a href="studentRegister.html">
                    <a href="registration"><input type="submit" class="btn btn-xll btn-success" value="Register yourself Here"></a>
                </a>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6 mb-5 register-right">
                <form action="/user_login" method="post">
                    @csrf
                    <br>
                    <br>
                    <Label class="p-1">ENTER YOUR cONTACT NO</Label>
                    <br>
                    <input class="form-control  p-2" type="number" name="contactNo" placeholder="Contact Number" value="{{old('contactNo')}}">
                    <span style="color : red">@error('contactNo'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1">ENTER PASSWORD</Label>
                    <br>
                    <input class="form-control  p-2" type="password" name="password" placeholder="PASSWORD" value="{{old('password')}}">
                    <span style="color : red">@error('password'){{$message}}@enderror</span>
                    <br>
                    <br>
                    <input class="form-control bg-success p-2 text-white btn" type="submit" value="Login Now">
                </form>
            </div>
        </div>
    </div>

    <div class="p-4"></div>
    <!-- footer start -->
  @include('userviews.maincomponents.footer')
  <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>