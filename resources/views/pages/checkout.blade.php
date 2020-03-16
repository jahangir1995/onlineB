@extends('index')

<link rel="stylesheet" href="{{asset('online/css/user.css')}}">

@section('content')
<div class="container">
	@if(session('id'))
	<div class="wrapper">
		<div class="form" >
			<p>
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</p>
			<div class="title">Give Shipping Address Information & Payment Method </div>
			<form action="{{route('order.confirm')}}" method="post">@csrf
				<p style="color: red">*Before fill up billing address make payment</p>
				
				<div class="inputField">
					<label>Your Name</label>
					<input type="text" name="name" class="col-md-8" id="">
				</div>
				<div class="inputField">
					<label>Phone Number</label>
					<input type="text" name="contact" class="col-md-8" id="">
				</div>
				<div class="inputField">
					<label>Address</label>
					<textarea name="address" rows="5" cols="30" class="col-md-8"></textarea> 
				</div>
				<div class="inputField">
					<p><b>Payment Method:</b></p>
				</div>
				<div class="inputField">
					<input class="form-check-input" type="radio" name="paymentoption" id="exampleRadios1" value="rocket" checked>
					<label class="form-check-label" for="exampleRadios1">
						Rocket
					</label>
				</div>
				<div class="inputField">
					<input class="form-check-input" type="radio" name="paymentoption" id="exampleRadios2" value="bkash">
					<label class="form-check-label" for="exampleRadios2">
						Bkash
					</label>
				</div>
				<div class="inputField">
					<input class="form-check-input" type="radio" name="paymentoption" id="exampleRadios3" value="cashon">
					<label class="form-check-label" for="exampleRadios3">
						Cash On
					</label>
				</div>
				<div class="inputField">
					<label>Account Number</label>
					<input type="text" name="accountnumber" class="col-md-8" id="">
				</div>
				<div class="inputField">
					<label>Transication Id</label>
					<input type="text" name="transication" class="col-md-8" id="">
				</div>
				<center><button type="submit" class="btn btn-primary mb-3">Confirm Order</button></center>
			</form>


		</div>
	</div>
	@else
	@include('user.userRegister')
	@endif
</div>
@endsection