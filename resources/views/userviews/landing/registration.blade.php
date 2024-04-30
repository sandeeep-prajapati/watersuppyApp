
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>New User Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- nav-bar start -->
    @include('userviews.maincomponents.nav')
    <!-- nav-bar end -->
    <div class="container">
    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
    </div>

    <div class="container register register-background custBack">
        <div class="row ">
            <h1 class="text-warning text-center"><b>Registration Page</b></h1>
            <div class="col-md-1">
            </div>
            <div class="col-md-4 register-left" style="padding-top: 170px;">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2 class="">We all welcome you...</h2>
                <p class="">if you have already registered then please login here...</p>
                <a href="studentRegister.html">
                    <a href="/login"><input type="submit" class="btn btn-xll btn-success" value="Login yourself Here"></a>
                </a>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6 mb-5 register-right">
                <form action="{{url('user_registration')}}" enctype='multipart/form-data' method="POST">
                    @csrf
                    <Label class="p-1">Enter Your Full Name</Label>
                    <br>
                    <input class="form-control p-2" type="text" name="name" placeholder="eg : Mr Mark Zuckerberg" value="{{old('name')}}">                       
                    <span style="color : red">@error('name'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1">ENTER YOUR Profile Image</Label>
                    <br>
                    <input class="form-control p-2" type="file" name="img" value="{{old('img')}}" placeholder = "choose image">                       
                    <span style="color : red">@error('img'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1">ENTER YOUR Contact No</Label>
                    <br>
                    <input class="form-control p-2" type="number" name="contactNo" placeholder="eg : 639242XXXX" value="{{old('contactNo')}}">
                    <span style="color : red">@error('contactNo'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1 ">Create Strong Password</Label>
                    <br>
                    <input class="form-control p-2" type="password" name="password" placeholder="PASSWORD" value="{{old('password')}}">
                    <span style="color : red">@error('password'){{$message}}@enderror</span>
                    <br>
                    <Label class="p-1 ">Enter your address</Label>
                    <br>
                    <input class="form-control p-2" type="text" name="address" placeholder="eg : Sector 5 Gida Gorkhpur" value="{{old('address')}}">
                    <span style="color : red">@error('address'){{$message}}@enderror</span>
                    <br>
                    <input class="form-control bg-success p-2 text-white btn" type="submit" value="Register Now">
                </form>
            </div>
        </div>
    </div>


        <!-- footer -->
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