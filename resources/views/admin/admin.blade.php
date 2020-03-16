@extends('admin.index')
@section('content')

<section>
	<h3 class="text-center">Admin</h3>
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
				<th>Email</th>	
			</tr>
		</thead>
		<tbody>
			@foreach($admin_info as $v_admin)
			<tr>
				<td>{{$v_admin->admin_name}}</td>
				<td>{{$v_admin->admin_email}}</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
</section>

@endsection()
