@extends('admin.index')
@section('content')

<section>
	<h3 class="text-center"> Show all Category</h3>
	<p>
		<?php
		$message = Session::get('message');
		if($message){
			echo "<div class='bg-primary'>$message</div> ";
			Session::put('message',NULL);
		}
		?>
	</p>
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th>Name</th>
				<th>Slug</th>
				<th>status</th>
				<th>Action</th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($category_info as $v_category)
			<tr>
				<td>{{$v_category->name}}</td>
				<td>{{$v_category->slug}}</td>
				<td>
					@if($v_category->status==1)
					<a href="{{URL::to('unactive_cat/'.$v_category->id)}}"><label class="badge badge-info">Active</label></a>
					@else
					<a href="{{URL::to('active_cat/'.$v_category->id)}}"><label class="badge badge-warning">Unactive</label></a>
					@endif
				</td>
				<td>
					<a href="{{URL::to('/eidt_category/'.$v_category->id)}}"><img style="height:20px; width:20px" src="{{asset('online/images/edit-solid.svg')}}"></a>
					<a href="{{URL::to('/delete_category/'.$v_category->id)}}"><img style="height:20px; width:20px" src="online/images/trash-alt-solid.svg"></a>
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
</section>

@endsection()
