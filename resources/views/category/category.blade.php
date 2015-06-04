@extends('admin_app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Add New Categories </h1>
		</div>
	</div>
</div>
<form class="form-horizontal" role="form" method="POST" action="{{ URL::route('category') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<label class="col-md-4 control-label">Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="name" value="">
		</div>
	</div>
	<div class="form-group ">
		<label class="col-md-4 control-label">Under Category:</label>
		<div class="col-md-6">
			<select class="form-control" name="under_category" id="under_category" >
			<option value="">-------</option>
			@foreach($categorys as $category)
				@if(($category->under_category_id) == 0)
				<option value="{{$category->id}}">{{$category->name}}</option>
				@endif
			@endforeach
			</select>
		</div>
	</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	@stop()