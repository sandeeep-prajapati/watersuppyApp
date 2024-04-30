<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Order Drinkable water on your need</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <!-- nav-bar start -->
        @include('userviews.maincomponents.nav')
        <!-- nav-bar end -->

        <!-- banner start -->
        @include('userviews.maincomponents.banner')
        <!-- banner end -->
      </div>
      <div class="row p3">
        <div class="col-md-4 col-sm-6">
          <img src="bannerImage/cardimage2.jpeg" style="width: 100%; height:auto;" alt="" srcset="">
        </div>
        <div class="col-md-8 col-sm-6">

          <h3 class="text-center" style="padding-top: 150px;">
            Welcome to <b>AquaFlow</b>! 🌊 Our mission is to keep you hydrated with refreshing bottled water, delivered right to your doorstep. With our user-friendly app, ordering water has never been easier. Here's how it works:
          </h3>
        </div>
      </div>

      <div class="row p3">
        <div class="col-md-8 col-sm-6">

          <h3 class="">
            1. <b>Location-Based Convenience</b>: Using your phone's location, we connect you to nearby water vendors. No more hassle of searching or waiting – just a seamless experience.
          </h3>
          <br>
          <h3 class="text-center">
            2. <b>Effortless Ordering</b>: When you place an order, the vendor receives only the essential details they need to fulfill it:
            <br>
            - Name: eg Mark Zuckerberg
            <br>
            - Address : eg sector 5 gida Gorkhpur
            <br>
            - Contact Number : 639242XXXX
            <br>
            - Latitude and Longitude: Ensuring accurate delivery
          </h3>
        </div>
        <div class="col-md-4 col-sm-6">
          <img src="bannerImage/imagecard1.png" style="width: 100%; height:auto;" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="row">
      <h1 class="p-4 text-center text-success">Stay hydrated, and thank you for choosing <b>AquaFlow</b>! 💧</h1>
    </div>


  </div>
  <!-- footer start -->
  @include('userviews.maincomponents.footer')
  <!-- footer end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>