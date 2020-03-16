@extends('admin.index')
@section('content')

<section>
	<h3 class="text-center"> Show all Product</h3>
	
	<table class="table">

		<thead class="thead-light">
			<tr>
				<th>Product Name</th>
				<th>Category Name</th>
				<th>Brand Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>status</th>
				<th></th>
				<th>Action</th>
				
			</tr>
			
		</thead>
		<tbody>
			@foreach($product_info as $v_product)
			<tr>
				<td>{{$v_product->title}}</td>
				<td>{{$v_product->category_id }}</td>
				<td>{{$v_product->brand_id}}</td>
				<td>{{$v_product->description}}</td>
				<td>{{$v_product->price}}</td>
				@if($v_product->status==1)
				<td class="center">
					<span class="label label-success">Active</span>
				</td>
				@else
				<td class="center"> 
					<span class="label label-success">Unactive</span>
				</td>
				@endif
				
				<td>
					@if($v_product->status==1)
					<a class="btn btn-info" href="{{URL::to('unactive_product/'.$v_product->id)}}">
						<i class="fa fa-thumbs-up"></i>
					</a>
					@else
					<a class="btn btn-warning" href="{{URL::to('active_product/'.$v_product->id)}}">
						<i class="fa fa-thumbs-down"></i>
					</a>
					@endif
				</td>
				<td>

					<a href="{{URL::to('/eidt_product/'.$v_product->id)}}"><i class="fa fa-edit"></i></a>
					<a href="{{URL::to('/delete_product/'.$v_product->id)}}"><img style="height:20px; width:20px" src="online/images/trash-alt-solid.svg"></a>
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
</section>

@endsection()
