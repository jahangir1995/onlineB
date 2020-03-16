@extends('index')

@section('content')
@include('pages.slider')
<div class="container pt-1 pb-1">
    <form action="{{ route('search') }}" class="form-inline" method="get">
        <input class="col-md-8 col form-control" name="search" type="text">
            <input class="btn btn-success" type="submit" value="Search">
            </input>
        </input>
    </form>
</div>
<div class="container-fluid bg-light-gray">
    <div class="container pt-5">
        <div class="row">
            <h3>
                Last uploade Product
            </h3>
        </div>
        <div class="underline">
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach($product_publish as $product)
            <div class="col-md-3 pb-2">
                <div class="card">
                    <img alt="" class="card-img-top" height="200px" src="{{asset(Storage::disk('local')->url($product->image))}}">
                        <div class="card-body">
                            <a href="{{route('product-details',$product->id)}}">
                                <h5>
                                    {{$product->title}}
                                </h5>
                            </a>
                            <h5>
                                @if($product->offer_price != null && $product->offer_price >0)BDT:
                                <strike>
                                    {{$product->price}}
                                </strike>
                                BDT: {{$product->offer_price}}
                                @else
                                BDT:{{$product->price}}
                                @endif
                            </h5>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$product->id}}">
                                    <input name="name" type="hidden" value="{{$product->title}}">
                                        <input name="qty" type="hidden">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-cart-plus">
                                                </i>
                                                Add to cart
                                            </button>
                                        </input>
                                    </input>
                                </input>
                            </form>
                        </div>
                    </img>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <h3>
                High Hell Shoe
            </h3>
        </div>
        <div class="row">
            <div class="underline">
            </div>
        </div>
    </div>
    <div class="container mt-5 pb-5">
        <div class="row">
            @foreach($shoes as $shoe)
            <div class="col-md-3 pb-2">
                <div class="card">
                    <img alt="" class="card-img-top" height="200px" src="{{asset(Storage::disk('local')->url($shoe->image))}}">
                        <div class="card-body">
                            <a href="{{route('product-details',$shoe->id)}}">
                                <h5>
                                    {{$shoe->title}}
                                </h5>
                            </a>
                          <h5>
                                @if($shoe->offer_price != null && $shoe->offer_price >0)BDT:
                                <strike>
                                    {{$shoe->price}}
                                </strike>
                                BDT: {{$shoe->offer_price}}
                                @else
                                BDT:{{$shoe->price}}
                                @endif
                            </h5>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$shoe->id}}">
                                    <input name="name" type="hidden" value="{{$shoe->title}}">
                                        <input name="qty" type="hidden">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-cart-plus">
                                                </i>
                                                Add to cart
                                            </button>
                                        </input>
                                    </input>
                                </input>
                            </form>
                        </div>
                    </img>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="co-md-6">
                <div class="row">
                    <h4>
                        MOST WANTED
                    </h4>
                </div>
                <div class="row">
                    <div class="underline-green">
                    </div>
                </div>
                @foreach($mostwanted as $v_mostwanted)
                <div class="media mt-5">
                    <img alt="" class="img-fluid mr-3" src="{{asset(Storage::disk('local')->url($v_mostwanted->image))}}">
                        <div class="media-body mt-2">
                           <h5>
                            <a href="{{route('product-details',$v_mostwanted->id)}}">
                                {{$v_mostwanted->title}}
                            </a>
                            </h5>
                            <h6>
                                @if($v_mostwanted->offer_price != null && $v_mostwanted->offer_price >0)BDT:
                                <strike>
                                    {{$v_mostwanted->price}}
                                </strike>
                                BDT: {{$v_mostwanted->offer_price}} @else BDT:{{$v_mostwanted->price}}@endif
                            </h6>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$v_mostwanted->id}}">
                                    <input name="name" type="hidden" value="{{$v_mostwanted->title}}">
                                        <input name="qty" type="hidden">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-cart-plus">
                                                </i>
                                                Add to cart
                                            </button>
                                        </input>
                                    </input>
                                </input>
                            </form>
                        </div>
                    </img>
                </div>
                @endforeach
            </div>
            <div class="co-md-6">
                <div class="row">
                    <h4>
                        SCARFs
                    </h4>
                </div>
                <div class="row">
                    <div class="underline-green">
                    </div>
                </div>
                @foreach($scarfs as $v_scarfs)
                <div class="media mt-5">
                    <img alt="" class="img-fluid mr-3" src="{{asset(Storage::disk('local')->url($v_scarfs->image))}}">
                        <div class="media-body mt-2">
                           <h5> <a href="{{route('product-details',$v_scarfs->id)}}">
                                {{$v_scarfs->title}}
                            </h5>
                            </a>
                            <h6>
                                @if($v_scarfs->offer_price != null && $v_scarfs->offer_price >0) BDT:
                                <strike>
                                    {{$v_scarfs->price}}
                                </strike>
                                BDT: {{$v_scarfs->offer_price}} @else  BDT:{{$v_scarfs->price}} @endif
                            </h6>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$v_scarfs->id}}">
                                    <input name="name" type="hidden" value="{{$v_scarfs->title}}">
                                        <input name="qty" type="hidden">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-cart-plus">
                                                </i>
                                                Add to cart
                                            </button>
                                        </input>
                                    </input>
                                </input>
                            </form>
                        </div>
                    </img>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
</div>
<div class="container-fluid bg-light-gray pt-5 pb-5">
    <div class="container">
        <div class="row">
            <h4>
                FEATURED
            </h4>
        </div>
        <div class="row">
            <div class="underline">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($feature as $v_feature)
            <div class="col-md-3 pt-2">
                <div class="card">
                    <img alt="" class="card-img-top" height="200px" src="{{asset(Storage::disk('local')->url($v_feature->image))}}">
                        <div class="card-body">
                            <h5>
                                <a href="{{route('product-details',$v_feature->id)}}">
                                    {{$v_feature->title}}
                                </a>
                            </h5>
                            <h6>
                                @if($v_feature->offer_price != null && $v_feature->offer_price >0)  BDT:
                                <strike>
                                    {{$v_feature->price}}
                                </strike>
                                BDT: {{$v_feature->offer_price}} @else  BDT:{{$v_feature->price}}  @endif
                            </h6>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$v_feature->id}}">
                                    <input name="name" type="hidden" value="{{$v_feature->title}}">
                                        <input name="qty" type="hidden">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-cart-plus">
                                                </i>
                                                Add to cart
                                            </button>
                                        </input>
                                    </input>
                                </input>
                            </form>
                        </div>
                    </img>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <h4>
            FROM THE BLOG
        </h4>
    </div>
    <div class="row">
        <div class="underline">
        </div>
    </div>
</div>
<div class="container pb-5 blog">
    <div class="row">
        <div class="col-md-6">
            <div class="media mt-5">
                <img alt="media" class="img-fluid mr-3" src="{{asset('online/images/c.jpeg')}}">
                    <div class="media-body">
                        <h5>
                            The he point.
                        </h5>
                        <p>
                            The tutor's comments on my work were very apt and to the point.
                        </p>
                        <p>
                            <i aria-hidden="true" class="fa fa-user">
                            </i>
                            Amind Date:12.12.2.18
                        </p>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media mt-5">
                <img alt="media" class="img-fluid mr-3" src="{{asset('online/images/c.jpeg')}}">
                    <div class="media-body">
                        <h5>
                            The he point.
                        </h5>
                        <p>
                            The tutor's comments on my work were very apt and to the point.
                        </p>
                        <p>
                            <i aria-hidden="true" class="fa fa-user">
                            </i>
                            Amind Date:12.12.2.18
                        </p>
                    </div>
                </img>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="media mt-5">
                <img alt="media" class="img-fluid mr-3" src="{{asset('online/images/c.jpeg')}}">
                    <div class="media-body">
                        <h5>
                            The he point.
                        </h5>
                        <p>
                            The tutor's comments on my work were very apt and to the point.
                        </p>
                        <p>
                            <i aria-hidden="true" class="fa fa-user">
                            </i>
                            Amind Date:12.12.2.18
                        </p>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media mt-5">
                <img alt="media" class="img-fluid mr-3" src="{{asset('online/images/c.jpeg')}}">
                    <div class="media-body">
                        <h5>
                            The he point.
                        </h5>
                        <p>
                            The tutor's comments on my work were very apt and to the point.
                        </p>
                        <p>
                            <i aria-hidden="true" class="fa fa-user">
                            </i>
                            Amind Date:12.12.2.18
                        </p>
                    </div>
                </img>
            </div>
        </div>
    </div>
</div>
<!------------TREANDS start-------------->
<div class="container-fluid pt-5 pb-5 bg-light-gray">
    <div class="container">
        <div class="row">
            <h4>
                TREANDS
            </h4>
        </div>
        <div class="row">
            <div class="underline">
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img alt="image" class="card-img-top" height="200px" src="{{asset('online/images/c.jpeg')}}">
                        <div class="card-body">
                            <h5>
                                Black Sgirt
                            </h5>
                            <h6>
                                #65.00
                            </h6>
                            <button class="btn btn-danger">
                                <i class="fa fa-cart-plus">
                                </i>
                                Add to cart
                            </button>
                        </div>
                    </img>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img alt="image" class="card-img-top" height="200px" src="{{asset('online/images/c.jpeg')}}">
                        <div class="card-body">
                            <h5>
                                Black Sgirt
                            </h5>
                            <h6>
                                #65.00
                            </h6>
                            <button class="btn btn-danger">
                                <i class="fa fa-cart-plus">
                                </i>
                                Add to cart
                            </button>
                        </div>
                    </img>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img alt="image" class="card-img-top" height="200px" src="{{asset('online/images/c.jpeg')}}">
                        <div class="card-body">
                            <h5>
                                Black Sgirt
                            </h4>
                            <h5>
                                #65.00
                            </h6>
                            <button class="btn btn-danger">
                                <i class="fa fa-cart-plus">
                                </i>
                                Add to cart
                            </button>
                        </div>
                    </img>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img alt="image" class="card-img-top" height="200px" src="{{asset('online/images/c.jpeg')}}">
                        <div class="card-body">
                            <h5>
                                Black Sgirt
                            </h5>
                            <h6>
                                #65.00
                            </h6>
                            <button class="btn btn-danger">
                                <i class="fa fa-cart-plus">
                                </i>
                                Add to cart
                            </button>
                        </div>
                    </img>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------TREANDS end-------------->
@endsection()
