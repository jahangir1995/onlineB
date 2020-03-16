@extends('admin.index')
@section('content')

<section>
	<h3 class="text-center"> Show all Product</h3>
	
	<table class="table">

		<thead class="thead-light">
			<tr>
				<th>Product ID</th>
				<th>Product Name </th>
				<th>Shipping id</th>
				<th>Quentity</th>
				<th>subtotal</th>
				
				<th>status</th>
				<th>Action</th>		
			</tr>
			
		</thead>
		<tbody>
			@foreach($order as $orders)
			<tr>
				<td>{{$orders->product_id}}</td>
				<td>{{$orders->Product->title}}</td>
				<td>{{$orders->shipping_id}}</td>
				<td>{{$orders->quentity}}</td>
				<td>{{$orders->subtotal}}</td>
				<td>fj</td>
				<td>
					<a href="{{route('orderview',$orders->product_id)}}"><i class="fa fa-eye"></i></a>
					<a href=""><i class="fa fa-edit"></i></a>
					<a href=""><img style="height:20px; width:20px" src="online/images/trash-alt-solid.svg"></a>
				</td>
			</tr>
			@endforeach()
			
		</tbody>
	</table>
</section>

@endsection()
