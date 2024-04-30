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
@if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
    <div class="container register register-background custBack">
        <div class="row ">
            <h1 class="text-center text-warning p-4">All active orders</h1>
            @foreach ($data0 as $d1)
                    <div class="col-md-3 col-sm-6" >
                        <div class="card">
                            <!-- <img src="{{$d1->img}}" class="card-img-top" alt="Profile image"> -->
                            <iframe src="https://google.com/maps?q={{$d1->latitude}},{{$d1->longitude}}&h1=es;z=14&output=embed" style="width: 100%; height: 300px;"></iframe>
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$d1->name}}</b></h5>
                                <h5 class="card-title"><b>Address : {{$d1->address}}</b></h5>
                                <h5 class="card-title">Amount : {{$d1->amout}}</h5>
                                <h5 class="card-title">Contact No : {{$d1->contactNo}}</h5>
                                <h5 class="card-title">Alternet Contact No : {{$d1->contactNo}}</h5>
                                <p class="card-text">These are all record will be shown to vender, if any thing wrong you can change it to edit prifile section. you can delete this record after getting fresh water water</p>
                                @if($d1->status == 0)
                                <a href="/comming?id={{$d1->order_id}}" class="btn btn-info">On the way</a>
                                <a href="/delivered?id={{$d1->order_id}}" class="btn btn-success">Delivered</a>
                                @endif
                                @if($d1->status == 1)
                                <a href="/cancel?id={{$d1->order_id}}" class="btn btn-danger">Cancel</a>
                                <a href="/delivered?id={{$d1->order_id}}" class="btn btn-success">Delivered</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>
        <div class="row">
        <h1 class="text-center text-primary p-4">Some one going for delivery</h1>
        @foreach ($data1 as $d1)
                    <div class="col-md-3 col-sm-6" >
                        <div class="card">
                            <!-- <img src="{{$d1->img}}" class="card-img-top" alt="Profile image"> -->
                            <iframe src="https://google.com/maps?q={{$d1->latitude}},{{$d1->longitude}}&h1=es;z=14&output=embed" style="width: 100%; height: 300px;"></iframe>
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$d1->name}}</b></h5>
                                <h5 class="card-title"><b>Address : {{$d1->address}}</b></h5>
                                <h5 class="card-title">Amount : {{$d1->amout}}</h5>
                                <h5 class="card-title">Contact No : {{$d1->contactNo}}</h5>
                                <h5 class="card-title">Alternet Contact No : {{$d1->contactNo}}</h5>
                                <p class="card-text">These are all record will be shown to vender, if any thing wrong you can change it to edit prifile section. you can delete this record after getting fresh water water</p>
                                @if($d1->status == 0)
                                <a href="/comming?id={{$d1->order_id}}" class="btn btn-info">On the way</a>
                                <a href="/delivered?id={{$d1->order_id}}" class="btn btn-success">Delivered</a>
                                @endif
                                @if($d1->status == 1)
                                <a href="/cancel?id={{$d1->order_id}}" class="btn btn-danger">Cancel</a>
                                <a href="/delivered?id={{$d1->order_id}}" class="btn btn-success">Delivered</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>

        <div class="row">
        <h1 class="text-center text-success p-4">Successfully delivery</h1>
        @foreach ($data2 as $d1)
                    <div class="col-md-3 col-sm-6" >
                        <div class="card">
                            <!-- <img src="{{$d1->img}}" class="card-img-top" alt="Profile image"> -->
                            <iframe src="https://google.com/maps?q={{$d1->latitude}},{{$d1->longitude}}&h1=es;z=14&output=embed" style="width: 100%; height: 300px;"></iframe>
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$d1->name}}</b></h5>
                                <h5 class="card-title"><b>Address : {{$d1->address}}</b></h5>
                                <h5 class="card-title">Amount : {{$d1->amout}}</h5>
                                <h5 class="card-title">Contact No : {{$d1->contactNo}}</h5>
                                <h5 class="card-title">Alternet Contact No : {{$d1->contactNo}}</h5>
                                <p class="card-text">These are all record will be shown to vender, if any thing wrong you can change it to edit prifile section. you can delete this record after getting fresh water water</p>
                                @if($d1->status == 0)
                                <a href="/comming?id={{$d1->order_id}}" class="btn btn-info">On the way</a>
                                <a href="/delivered?id={{$d1->order_id}}" class="btn btn-success">Delivered</a>
                                @endif
                                @if($d1->status == 1)
                                <a href="/cancel?id={{$d1->order_id}}" class="btn btn-danger">Cancel</a>
                                <a href="/delivered?id={{$d1->order_id}}" class="btn btn-success">Delivered</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
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