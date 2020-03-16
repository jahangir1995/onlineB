<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            online Shoping
        </title>
        <meta charset="utf-8">
            <link href="{{asset('online/css/bootstrap.min.css')}}" rel="stylesheet">
                <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                    <link href="{{asset('online/css/animate.min.css')}}" rel="stylesheet" type="text/css">
                        <link href="{{asset('online/css/style.css')}}" rel="stylesheet" type="text/css">
                        </link>
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container-fluid bg-dark header-top d-none d-md-block">
            <div class="container">
                <div class="row text-light pt-2 pb-2">
                    <div class="col-md-5">
                        <i aria-hidden="ture" class="fa fa-envelope-o">
                        </i>
                        jahangir@gmail.com
                    </div>
                    <div class="col-md-3">
                    </div>
                    @if(Session('id'))
                    <div class="col-md-2">
                        <i aria-hidden="true" class="fa fa-cart-plus">
                            <a  href="{{route('cart.show')}}">
                                My Cart
                            </a>
                            $0.00
                        </i>
                    </div>
                    <div class="col-md-2">
                        <i aria-hidden="true" class="fa fa-user-o">
                        </i>
                        @php
                            $data = Session::get('name');
           
                        @endphp
                        <a href="{{route('profile')}}">
                            {{$data}}
                        </a>
                    </div>
                    @else
                    <div class="col-md-2">
                        <i aria-hidden="true" class="fa fa-user-o">
                            <a href="{{route('register')}}">
                                Create An Account
                            </a>
                        </i>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @include('pages.navbar')

  @yield('content')

  @include('pages.footer')
        <script src="{{asset('online/js/jquery.min.js')}}">
        </script>
        <script src="{{asset('online/js/popper.min.js')}}">
        </script>
        <script src="{{asset('online/js/bootstrap.min.js')}}">
        </script>
        <script>
            $('.carousel').carousel({
      interval:6000   
    })
        </script>
    </body>
</html>