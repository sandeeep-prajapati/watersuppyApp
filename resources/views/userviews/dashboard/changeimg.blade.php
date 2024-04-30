<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>New User Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body onload="getCurrentLocation()">


    <div class="container register register-background custBack">
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

        <div class="row p-4">
            <div class="col-md-3 col-sm-2"></div>
            <div class="col-md-6 col-md-8" style="padding-bottom: 200px;">
                <h1 class="text-center">Pick image for profile image</h1>
                <form action="{{url('changeImage')}}" enctype='multipart/form-data' method="POST">
                    <br>
                    @csrf
                    <input type="number" class="form-control" style="display: none;" value="{{$id}}">  
                    <label for="change_image">Change Profile image</label>
                    <input type="file" name='img' class="form-control" placeholder="choose image">
                    <br>
                    <button type="submit" class="btn form-control btn-success">Change Image</button>
                </form>
            </div>
            <div class="col-md-3 col-sm-2"></div>
        </div>

        


    </div>


    <!-- footer -->
    <div class="p-4"></div>
    <!-- footer start -->
  @include('userviews.maincomponents.footer')
  <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>