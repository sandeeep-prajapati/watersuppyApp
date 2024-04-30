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
            @foreach($data as $d)
            <div class="col-md-4 col-sm-6">
                <img src="{{$d->img}}" style="width:100%; height: auto;" alt="" srcset="">
            </div>
            <div class="col-md-8 col-md-6">
                <h1 class="text-center">Hello {{$d->name}} 👋</h1>
                <p>Welcome to AquaFlow! 🌊 Order refreshing bottled water effortlessly with our app. Based on your phone's location,
                    we connect you to nearby water vendors. When you place an order,
                    the vendor receives your basic details: <b>name ({{$d->name}})</b>, <b>address({{$d->address}})</b>, <b>contact number({{$d->contactNo}})</b>, and precise latitude and longitude. Your privacy is our priority, and we share only essential information. Stay hydrated and thank you for choosing AquaFlow! 💧</p>
            </div>
            @endforeach
        </div>

        <div class="row pt-3">
            <h2 class="text-center text-primary">Book fresh water here</h2>
            <div class="row">
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 100px;">Kindly tell us some more details</h3>
                    <p class="pt-3 text-center">We need some more details about your order to deliver your order on time, kindly fill correct details..</p>

                </div>
                <div class="col-md-6">
                    <form action="{{url('orderdetails')}}" method="POST">
                        @csrf
                        <p>Kindly grant us your location to autometicaly fill these two fields</p>
                        <label for="latitude">Enter location of order (latitude)</label>
                        <input class="form-control p-2" type="text" id="latitude" name="latitude">
                        <br>
                        <label for="longitude">Enter location of order (longitude)</label>
                        <input class="form-control p-2" type="text" id='longitude' name="longitude">
                        <br>
                        <Label class="p-1">Address to deliver</Label>
                        <br>
                        <input class="form-control p-2" type="text" name="address" placeholder="eg : Sector 5 gida gorkhapur" value="{{old('address')}}">
                        <span style="color : red">@error('address'){{$message}}@enderror</span>
                        <br>
                        <Label class="p-1">ENTER YOUR Alternet Contact No</Label>
                        <br>
                        <input class="form-control p-2" type="number" name="contactNo" placeholder="eg : 639242XXXX" value="{{old('contactNo')}}">
                        <span style="color : red">@error('contactNo'){{$message}}@enderror</span>
                        <br>
                        <Label class="p-1 ">Number of Liters water you need</Label>
                        <br>
                        <input class="form-control p-2" type="number" name="amout" placeholder="eg : 20 Liters" value="{{old('amout')}}">
                        <span style="color : red">@error('amout'){{$message}}@enderror</span>
                        <br>
                        <input class="form-control bg-success p-2 text-white btn" type="submit" value="Book Now">
                    </form>
                </div>

            </div>
            <hr class="pt-4">
            <div class="row">
                <h2 class="pt-4 text-center text-primary">Your current orders</h2>
                <div class="row" id="orders">
                    @foreach ($data as $d1)
                    @foreach($data2 as $d2)
                    <div class="col-md-3 col-sm-6" >
                        <div class="card">
                            <!-- <img src="{{$d1->img}}" class="card-img-top" alt="Profile image"> -->
                            <iframe src="https://google.com/maps?q={{$d2->latitude}},{{$d2->longitude}}&h1=es;z=14&output=embed" style="width: 100%; height: 300px;"></iframe>
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$d1->name}}</b></h5>
                                <h5 class="card-title"><b>Address : {{$d1->address}}</b></h5>
                                <h5 class="card-title">Amount : {{$d2->amout}}</h5>
                                <h5 class="card-title">Contact No : {{$d1->contactNo}}</h5>
                                <h5 class="card-title">Alternet Contact No : {{$d2->contactNo}}</h5>
                                <p class="card-text">These are all record will be shown to vender, if any thing wrong you can change it to edit prifile section. you can delete this record after getting fresh water water</p>
                                <a href="/deleteCard?id={{$d2->order_id}}" class="btn btn-danger">Delete Record</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>

            </div>
        </div>


    </div>


    <!-- footer -->
    <div class="p-4"></div>
    <!-- footer start -->
  @include('userviews.maincomponents.footer')
  <!-- footer end -->


    <script>
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const latitudeInput = document.getElementById('latitude');
                    const longitudeInput = document.getElementById('longitude');

                    // Fill in the input fields with the obtained location
                    latitudeInput.value = position.coords.latitude;
                    longitudeInput.value = position.coords.longitude;
                }, function(error) {
                    // Handle geolocation error
                    console.log('Geolocation error:', error);
                });
            } else {
                alert("Kindly grant access to use location or fill location 🔍 (latitude & longitude) of your current location")
                console.log('Geolocation is not supported by this browser.');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>