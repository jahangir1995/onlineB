
@extends('admin.index')
@section('content')


<section>
	<h3 class="text-center"> Show all Brand</h3>
	<p>
		<?php
		$message = Session::get('message');
		if($message){
			echo "<div class='bg-primary'>$message</div> ";
			Session::put('message',NULL);
		}
		?>
	</p>
	<table id="myTable" class="table">
		<thead class="thead-light">
			<tr>
				<th>Brand Name</th>
				<th>Slug</th>
				<th>status/th>
					<th>Action</th>
				</tr>
				
			</thead>
			<tbody>
				@foreach($brand_info as $v_brand)
				<tr>
					<td>{{$v_brand->name}}</td>
					<td>{{$v_brand->slug}}</td>
					<td>{{$v_brand->status}}</td>
					<td>
						<a href="{{URL::to('/eidt_brand/'.$v_brand->id)}}"><img style="height:20px; width:20px" src="online/images/edit-solid.svg"></a>
						<a href="{{URL::to('/delete-brand/'.$v_brand->id)}}"><img style="height:20px; width:20px" src="online/images/trash-alt-solid.svg"></a>
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</section>

	@endsection()
