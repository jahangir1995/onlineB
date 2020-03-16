@extends('admin.index')
@section('content')
<section>
	<h3 class="text-center"> Show all Slider</h3>
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
				<th>#</th>
				<th>Image</th>
				<th>status</th>
				<th></th>
				<th>Action</th>
				
			</tr>
			
		</thead>
		<tbody>
			@foreach($slider_info as $v_slider)
			<tr>
				<td>#</td>
				<td><img height="50px" width="40px" src="{{URL::to($v_slider->image )}}"></td>
				
				@if($v_slider->status==1)
				<td class="center">
					<span class="label label-success">Active</span>
				</td>
				@else
				<td class="center"> 
					<span class="label label-success">Unactive</span>
				</td>
				@endif
				
				<td>
					@if($v_slider->status==1)
					<a class="btn btn-info" href="{{URL::to('unactive_slider/'.$v_slider->id)}}">
						<i class="fa fa-thumbs-up"></i>
					</a>
					@else
					<a class="btn btn-warning" href="{{URL::to('active_slider/'.$v_slider->id)}}">
						<i class="fa fa-thumbs-down"></i>
					</a>
					@endif
				</td>
				<td>

					<a href="{{URL::to('/eidt_slider/'.$v_slider->id)}}"><i class="fa fa-edit"></i></a>
					<a href="{{URL::to('/delete_slider/'.$v_slider->id)}}"><img style="height:20px; width:20px" src="online/images/trash-alt-solid.svg"></a>
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
</section>

@endsection()
