@extends('admin.index')
@section('content')
<div class="wrapper">
	<div class="form">
		<div class="title">Update  Category Information Add</div>
		<form method="post" action="{{URL('/update-category',$category_info->id)}}" enctype="multipart/form-data">@csrf


			<div class="inputField">
				<label> Category name</label>
				<input type="text" name="name" value="{{$category_info->name}}" class="col-md-8" id="">
			</div>

			<div class="inputField">
				<label for="">slug</label>
				<input type="text" name="slug" value="{{$category_info->slug}}" class="col-md-8" id="">
			</div>

			<center><button type="submit" name="submit" class="btn btn-primary mb-3">update Information</button></center>
		</form>
	</div>
</div>


@endsection()


