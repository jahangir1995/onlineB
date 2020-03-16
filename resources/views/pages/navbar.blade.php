 <!------------Navbar start------------->
 <div id="nav">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Brand
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            $brand_publish =DB::table('brands')->get();

            foreach($brand_publish as $brands) {?>
            <a class="dropdown-item" href="{{route('product_by_brands',$brands->id)}}">{{$brands->name}}</a>
            <?php }?>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            $category_publish =DB::table('categories')->get();
            foreach($category_publish as $v_category) {?>
            <a class="dropdown-item" href="{{route('product_by_category',$v_category->id)}}">{{$v_category->name}}</a>

            <?php }?>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
        </li>
        



        @if(session('id')) 
         <li class="nav-item">
        <a class="nav-link" href="{{route('userlogout')}}">Logout</a>
      </li>
        {{-- <li class="nav-item">
          <form action="{{route('userlogout')}}" method="post"> </form>
          <input type="hidden" name="id" value="{{session('id')}}">
          <a class="nav-link" href="">logout</a>
        </li> --}}
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user-login')}}">Login</a>
        </li>
        @endif

      </ul>

    </div>
  </nav>
</div>

  <!-----------Navbar end-------------->