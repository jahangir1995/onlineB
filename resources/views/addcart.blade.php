@extends('index')
@section('content')
<div class="container">
	<div class="row pt-5 pb-5">
		<div class="table-responsive">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Sub Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$total =0;
					?>
					@foreach($product_show as $carrowID=> $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->qty}}</td>
						<td>{{$product->price}}</td>
						<?php $subtotal =$product->qty * $product->price?>
						<td>{{$subtotal}}</td>
						<td>
							<form action="{{route('remove.to.cart')}}" method="post">@csrf
								<input type="hidden" name="rowID" value="{{ $carrowID }}">
								<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i><i class="fa fa-cart-remove"></i></button>
							</form>
						</td>
					</tr>
					<?php 
						$total = $total+$subtotal;
					?>
					@endforeach
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Total Price</td>
						<td>{{$total}}</td>
						</tr>
				</tbody>
			</table>{{-- 

			<form action="{{route('checkout')}}" method="post">@csrf
				<input type="hidden" name="id" value="$product->id">
			
				<center><input type="submit" name="check_out" value="Check Out"></center>
			</form>
				<center><input type="submit" name="check_out" value="Check Out"></center> --}}

				<center><a class="btn btn-danger" href="{{route('checkout')}}">Check Out</a></center>

		</div>
	</div>
</div>
@endsection