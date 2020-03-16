@extends('admin.index')
@section('content')
<div class="wrapper">
	<div class="form">
		<div class="title">Brand Information Add </div>
		<form method="post" action="{{URL('/save_brand')}}" enctype="multipart/form-data">@csrf
			
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
				<label>Brand Name</label>
				<input type="text" name="name" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<label>slug</label>
				<input type="text" name="slug" class="col-md-8" id="">
			</div>
			
			<div class="inputField">
				<label>Status</label>
				<div class="controls">
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox1" value="1" name="status">Publish
					</label>	 
				</div>
			</div>

			<center><button type="submit" name="submit" class="btn btn-primary mb-3">Add Information</button></center>
		</form>
	</div>
</div>

@endsection()