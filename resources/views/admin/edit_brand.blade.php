@extends('admin.index')
@section('content')
<div class="wrapper">
	<div class="form">
		<div class="title">Update Brand Information Add </div>
		<form method="post" action="{{URL('/update-brand',$brand_info->id)}}" enctype="multipart/form-data">@csrf
			<div class="inputField">
				<label for="">Brand Name</label>
				<input type="text" name="name" value="{{$brand_info->name}}" class="col-md-8" id="">
			</div>
			<div class="inputField">
				<label for="">Slug</label>
				<input type="text" name="slug" value="{{$brand_info->slug}}" class="col-md-8" id="">
			</div>

			<center><button type="submit" name="submit" class="btn btn-primary mb-3">update </button></center>
		</form>
	</div>
</div>

@endsection()