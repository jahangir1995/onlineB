@extends('admin.index')
@section('content')
<div class="wrapper">
	<div class="form">
		<div class="title">Slider Image Add</div>

		<form method="post" action="{{URL('/save_slider')}}" enctype="multipart/form-data">@csrf

			<p>
				<?php
				$message = Session::get('message');
				if($message){
					echo "<div class='bg-primary'>$message</div> ";
					Session::put('message',NULL);
				}
				?>
			</p>
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

			<div class="inputField">
				<label for="">Image</label>
				<input type="file" name="image" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<div class="controls">
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox1" value="1" name="status">Publish
					</label>	 
				</div>
			</div>

			<center><button type="submit" name="submit" class="btn btn-primary mb-3">upload </button></center>
		</form>
	</div>
</div>

@endsection()