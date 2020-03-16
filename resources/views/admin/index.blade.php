<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('online/css/admin.css')}}">


  <title>Online Shop</title>
</head>
<body>

 <nav class="navbar bg-success navbar-dark navbar-expand-md">
  <div class="container">
  <a href="" class="navbar-brand">Online Shop Admin Panel</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item"></i><a href="#" class="nav-link">{{session('admin_name')}}</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Setting</a></li>
        <li class="nav-item"><a href="{{URL::to('/logout')}}" class="nav-link">Logout</a></li>

      </ul>
    </div>
  </div>
</nav>

<section>
    <div class="row">

      <div class="col-md-2 mt-5 ">
        <div id="Slider_Nav">
          <ul class="list-group">
            <li class="list-group-item list-group-item-info"><a href="{{URL::to('/dashboard')}}">Dashboard</a></li>
            <li class="list-group-item list-group-item-info"><div id="btn">Product Manage<i class="fa fa-angle-down"></i></div></li>
            <div id="dop">
              <li class="list-group-item"><a href="{{URL::to('/addProduct')}}">Product Add</a></li>
              <li class="list-group-item"><a href="{{URL::to('/show-product')}}">Show Product</a></li>
            </div>

            <li class="list-group-item list-group-item-info"><div id="cat">Category Manage<i class="fa fa-angle-down"></i></div></li>
            <div id="catlist">
              <li class="list-group-item"><a href="{{URL::to('/addCategory')}}">Category Add</a></li>
              <li class="list-group-item"><a href="{{URL::to('/show_category')}}">Show Category</a></li>
            </div>

            <li class="list-group-item list-group-item-info"><div id="ban">Brand Manage<i class="fa fa-angle-down"></i></div></li>
            <div id="banlist">
              <li class="list-group-item"><a href="{{URL::to('/addBrand')}}">Brand Add</a></li>
              <li class="list-group-item"><a href="{{URL::to('/show_brand')}}">Show Brand</a></li>
            </div>

            {{-- <li class="list-group-item list-group-item-info"><div id="slider">Slider<i class="fa fa-angle-down"></i></div></li>
            <div id="sliderlist">
              <li class="list-group-item"><a href="{{URL::to('/add_slider')}}">Slider Add</a></li>
              <li class="list-group-item"><a href="{{URL::to('/show_slider')}}">Slider Show</a></li>
            </div> --}}

            <li class="list-group-item list-group-item-info"><a href="{{URL::to('/admin_show')}}">Admin Manage</a></li>
            <li class="list-group-item list-group-item-info"><a href="{{ route('showOrder') }}">Order Order Manage</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-10">
        <div class="content-wrapper">

          @yield('content')

        </div>

      </div>
    </div>

</section>


<footer id="footer-section" class="text-center bg-primary">
  <div class="container">
    <div class="row text-light">
      <div class="col-md-12">
        <h2>online shop</h2>
        <p>copyright &conpy; 2019</p>
        <span>Designed: <a class="ml-2 text-dark" href="" target="_blank">jahangir</a></span>

      </div>
    </div>
  </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="{{asset('online/js/jquery.min.js')}}"></script>

<script src="{{asset('online/js/main.js')}}"> </script>
</body>
</html>