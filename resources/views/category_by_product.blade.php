@extends('index')
@section('content')
<div class="container-fluid bg-light-gray">
    <div class="container pt-5">
        <div class="row">
            <h3>
                Product Show By category:
            </h3>
        </div>
        <div class="underline">
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach( $publish_product as $v_publish)
            <div class="col-md-3 pb-2">
                <div class="card">
                    <img alt="" class="card-img-top" height="200px" src="{{asset(Storage::disk('local')->url($v_publish->image))}}">
                        <div class="card-body">
                            <a href="{{URL::to('/details_product/'.$v_publish->id)}}">
                                <h5>
                                    {{$v_publish->title}}
                                </h5>
                            </a>
                            <h5>
                                {{$v_publish->price}}
                            </h5>
                            <form action="{{route('add.to.cart')}}" method="post">
                                @csrf
                                <input name="product_id" type="hidden" value="{{$v_publish->id}}">
                                    <input name="name" type="hidden" value="{{$v_publish->title}}">
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
