@extends('index')
@section('content')
<div class="container-fluid bg-light-gray">
    <div class="container pt-5">
        <div class="row">
            <form action="{{ route('search') }}" class="form-inline" method="get">
                <input class="col-md-8 form-control" name="search" type="text">
                    <input class="btn btn-success" type="submit" value="Search">
                 
              

            </form>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <h3>
                Searching Result
            </h3>
        </div>
        <div class="underline">
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach( $search_products as $search_product)
            <div class="col-md-3 pb-2">
                <div class="card">
                    <img alt="" class="card-img-top" height="200px" src="{{asset(Storage::disk('local')->url($search_product->image))}}">
                        <div class="card-body">
                            <a href="">
                                <h5>
                                    {{$search_product->title}}
                                </h5>
                            </a>
                            <h5>
                                {{$search_product->price}}
                            </h5>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$search_product->id}}">
                                    <input name="name" type="hidden" value="{{$search_product->title}}">
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
@endsection()
