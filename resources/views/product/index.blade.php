@extends('admin_app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Product List</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Categories</th>
						<th>price</th>
						<th>picture</th>
						<th>condition</th>
						<th>brand</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{$product->name}}</td>
						<td>{{$product->categories_id}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->picture}}</td>
						<td>{{$product->condition}}</td>
						<td>{{$product->brand_id}}</td>
						<td class="btn btn-default"><a href="{{URL::route('create-product')}}"> New </a></td>
					</tr>	
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@stop()