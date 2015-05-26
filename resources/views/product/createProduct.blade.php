@extends('admin_app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Add New Product</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
		<form role="form" method="POST" action="{{URL::route('create-product')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label>Product Name:</label>
				<input type="text" name="name" value="" id="name" placeholder="Product Name" class="form-control">
			</div>
			<div class="form-group">
				<label>Price:</label>
				<input type="text" name="price" value="" id="price" placeholder="Product Price" class="form-control">
			</div>
			<div class="form-group">
				<label>Picture:</label>
				<input type="file" name="picture">
			</div>
			<div class="form-group">
				<label>Product Quantity:</label>
				<input type="text" name="qty" value="" id="qty" placeholder="Product Quantity" class="form-control">
			</div>
			<div class="form-group">
				<label>Condition:</label>
				<input type="text" name="condition" value="" id="condition" placeholder="Product Condition" class="form-control">
			</div>
			<div class="form-group">
				<label>Category:</label>
				<input type="text" name="category" value="" id="condition" placeholder="Product Condition" class="form-control">
			</div>
			<div class="form-group">
				<label>Brand:</label>
				<input type="text" name="brand" value="" id="brand" placeholder="Product Brand" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	
		</div>
	</div>
</div>

@stop()