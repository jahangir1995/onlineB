@extends('index')
@section('content')
<div class="col-md-9">
    <div class="row">
        {{-- <div class="container">
            <div class="row pb-2">
                <div class="col-md-12">
                    Home &GT; Shop &GT; Women &GT; Dress
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="carousel slide" data-ride="carousel" id="carouselExampleControls">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img alt="image" class="d-block w-100" src="{{asset(Storage::disk('local')->url($publish_product_details->image))}}">
                                </img>
                            </div>
                            <div class="carousel-item">
                                <img alt="image" class="d-block w-100" src="{{asset(Storage::disk('local')->url($publish_product_details->image))}}">
                                </img>
                            </div>
                            <div class="carousel-item">
                                <img alt="image" class="d-block w-100" src="{{asset(Storage::disk('local')->url($publish_product_details->image))}}">
                                </img>
                            </div>
                        </div>
                        <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleControls" role="button">
                            <span aria-hidden="true" class="carousel-control-prev-icon">
                            </span>
                            <span class="sr-only">
                                Previous
                            </span>
                        </a>
                        <a class="carousel-control-next" data-slide="next" href="#carouselExampleControls" role="button">
                            <span aria-hidden="true" class="carousel-control-next-icon">
                            </span>
                            <span class="sr-only">
                                Next
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <h2>
                            {{$publish_product_details->title}}
                        </h2>
                    </div>
                    <div class="row">
                        <h1>
                            <i aria-hidden="true" class="fa fa-inr">
                                {{$publish_product_details->price}}
                            </i>
                        </h1>
                        <h3>
                            <del>
                                799
                            </del>
                        </h3>
                        <h2 class="text-success ">
                            30% off
                        </h2>
                    </div>
                    <div class="row">
                        <h3 class="text-success">
                            <i aria-hidden="ture" class="fa fa-star">
                                <i aria-hidden="ture" class="fa fa-star">
                                </i>
                                <i aria-hidden="ture" class="fa fa-star">
                                </i>
                            </i>
                        </h3>
                        <h5>
                            1200 star rating and 250 reviews
                        </h5>
                    </div>
                    <div class="row">
                        <p>
                            {{$publish_product_details->description}}
                        </p>
                        <p>
                            <i aria-hidden="ture" class="fa fa-check-square-o">
                            </i>
                            <strong>
                                Bank Offer
                            </strong>
                            20% Instant Discount on SBi Credit Cards
                        </p>
                    </div>
                    <div class="row mt-4">
                        <h3 class="text info">
                            <i aria-hidden="true" class="fa fa-map-marker">
                            </i>
                        </h3>
                        <p style="font-size: 20px">
                            Delivey by 23 Jul, Thuseday |
                            <span class="text-success">
                                Free
                            </span>
                        </p>
                    </div>
                    <div class="row mt-3">
                        <form action="{{route('add.to.cart')}}" method="post">
                            @csrf
                            <input name="product_id" type="hidden" value="{{$publish_product_details->id}}">
                                <input name="name" type="hidden" value="{{$publish_product_details->title}}">
                                    <input name="qty" type="hidden">
                                        <form action="{{route('add.to.cart')}}" method="post">
                                            @csrf
                                            <input name="product_id" type="hidden" value="{{$publish_product_details->id}}">
                                                <input name="name" type="hidden" value="{{$publish_product_details->title}}">
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
                                    </input>
                                </input>
                            </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------More Pordouct Section Start---------->
<div class="container">
    <div class="row mt-4">
        <h2>
            Similar Products:
        </h2>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('online/images/d.jpeg')}}">
                    <div class="card-title">
                        <h4>
                            GYN Tops
                        </h4>
                    </div>
                    <div class="card-text">
                        They met in the corridors of the university. He was like a tanker rolling towards her; his shoulders filled the corridor, his very presence blocking her way. He towered over her like a watchtower.
                        <br/>
                        <br/>
                        <a class="btn btn-success card-text">
                            Buy Now
                        </a>
                        <a class="btn btn-danger card-text">
                            <i aria-hidden="ture" class="fa fa-shopping-cart">
                            </i>
                            Add to cart
                        </a>
                        <br/>
                        <br/>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('online/images/d.jpeg')}}">
                    <div class="card-title">
                        <h4>
                            GYN Tops
                        </h4>
                    </div>
                    <div class="card-text">
                        They met in the corridors of the university. He was like a tanker rolling towards her; his shoulders filled the corridor, his very presence blocking her way. He towered over her like a watchtower.
                        <br/>
                        <br/>
                        <a class="btn btn-success card-text">
                            Buy Now
                        </a>
                        <a class="btn btn-danger card-text">
                            <i aria-hidden="ture" class="fa fa-shopping-cart">
                            </i>
                            Add to cart
                        </a>
                        <br/>
                        <br/>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('online/images/d.jpeg')}}">
                    <div class="card-title">
                        <h4>
                            GYN Tops
                        </h4>
                    </div>
                    <div class="card-text">
                        They met in the corridors of the university. He was like a tanker rolling towards her; his shoulders filled the corridor, his very presence blocking her way. He towered over her like a watchtower.
                        <br/>
                        <br/>
                        <a class="btn btn-success card-text">
                            Buy Now
                        </a>
                        <a class="btn btn-danger card-text">
                            <i aria-hidden="ture" class="fa fa-shopping-cart">
                            </i>
                            Add to cart
                        </a>
                        <br/>
                        <br/>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('online/images/d.jpeg')}}">
                    <div class="card-title">
                        <h4>
                            GYN Tops
                        </h4>
                    </div>
                    <div class="card-text">
                        They met in the corridors of the university. He was like a tanker rolling towards her; his shoulders filled the corridor, his very presence blocking her way. He towered over her like a watchtower.
                        <br/>
                        <br/>
                        <a class="btn btn-success card-text">
                            Buy Now
                        </a>
                        <a class="btn btn-danger card-text">
                            <i aria-hidden="ture" class="fa fa-shopping-cart">
                            </i>
                            Add to cart
                        </a>
                        <br/>
                        <br/>
                    </div>
                </img>
            </div>
        </div>
    </div>
</div>
<!-------------More Pordouct Section  End---------->
<!-------------Rating and Reviews Section start---------->
<div class="container mt-5 mb-5">
    <div class="row">
        <h2>
            Rating & Reviwes
        </h2>
    </div>
    <div class="row mb-5">
        <div class="media">
            <img alt="image" class="mr-3" height="50px" src="{{asset('online/images/Jahangir.jpg')}}">
                <div class="media-body">
                    <h5 class="mt-0">
                        Very Nice Product
                        <span class="tex-danger">
                            <i aria-hidden="ture" class="fa fa-star">
                                <i aria-hidden="ture" class="fa fa-star">
                                </i>
                                <i aria-hidden="ture" class="fa fa-star">
                                </i>
                            </i>
                        </span>
                    </h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </img>
        </div>
    </div>
    <div class="row mb-5">
        <div class="media">
            <img alt="image" class="mr-3" height="50px" src="{{asset('online/images/Jahangir.jpg')}}">
                <div class="media-body">
                    <h5 class="mt-0">
                        Very Nice Product
                        <span class="tex-danger">
                            <i aria-hidden="ture" class="fa fa-star">
                                <i aria-hidden="ture" class="fa fa-star">
                                </i>
                                <i aria-hidden="ture" class="fa fa-star">
                                </i>
                            </i>
                        </span>
                    </h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </img>
        </div>
    </div>
    <div class="row mt-5">
        <h2>
            Post your own Reviews
        </h2>
    </div>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">
                Email address
            </label>
            <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                <small class="form-text text-muted" id="emailHelp">
                    We'll never share your email with anyone else.
                </small>
            </input>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">
                Comments
            </label>
            <textarea class="form-control" id="exampleInput" placeholder="Write your comments " type="text">
            </textarea>
        </div>
        <div class="form-group form-check">
            <input class="form-check-input" id="exampleCheck1" type="checkbox">
                <label class="form-check-label" for="exampleCheck1">
                    Check me out
                </label>
            </input>
        </div>
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>
</div>
@endsection()
