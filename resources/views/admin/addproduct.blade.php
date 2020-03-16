@extends('admin.index')
@section('content')
<div class="wrapper">
	<div class="form">
		<div class="title"> Product Information Add </div>
		<form class="form" method="post" action="{{URL('/save_product')}}" enctype="multipart/form-data">@csrf

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
				<label for="">Category Name</label>
				<select class="col-md-8" name="category_name">
					<option>Select</option>
					<?php 
					$category_publish =DB::table('categories')->get();
					foreach($category_publish as $v_category) {?>

					<option value="{{$v_category->id}}">{{$v_category->name}}</option>
					<?php }?>
				</select>
			</div>
			<div class="inputField">
				<label for="">Brand Name</label>
				<select class="col-md-8" name="brand_name">
					<option>Select</option>
					<?php 
					$brand_publish =DB::table('brands')->get();
					foreach($brand_publish as $v_brand) {?>

					<option value="{{$v_brand->id}}">{{$v_brand->name}}</option>
					<?php }?>
				</select>
			</div>

			<div class="inputField">
				<label for="">Product Name:</label>
				<input type="text" name="productname" value="{{old('productname')}}" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<label for="">Description:</label>

				<textarea name="description" class="col-md-8" value="{{old('description')}}" rows="5"></textarea>

			</div>
			<div class="inputField">
				<label for="">image:</label>
				<input type="file" name="image" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<label for="">Slug:</label>
				<input type="text" name="slug" value="{{old('slug')}}" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<label for="">Quentity:</label>
				<input type="text" name="quentity" value="{{old('quentity')}}" class="col-md-8" id="">
			</div>

			<div class="inputField">
				<label for="formGroupExampleInput">Price</label>
				<input type="text" name="price"  value="{{old('price')}}" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<label for="">Admin Name</label>
				<select class="col-md-8" name="admin_id">
					<option>Select</option>
					<?php 
					$admins =DB::table('admins')->get();
					foreach($admins as $admin) {?>

					<option value="{{$admin->admin_id}}">{{$admin->admin_name}}</option>
					<?php }?>
				</select>
			</div>
			<div class="inputField">
				<label class="control-label">Status</label>
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox" id="inlineCheckbox1" value="1" name="status">Publish
					</label>	 
				</div>
			</div>

			<center><button type="submit" name="submit" class="btn btn-primary mb-3">Add Information</button></center>
		</form>
	</div>
</div>

@endsection()