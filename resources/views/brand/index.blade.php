@extends('admin_app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Category List </h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($brands as $brand)
				<tr>
					<td>{{$brand->name}}</td>
				<td class="btn btn-default"><a href="{{URL::route('create-brand')}}"> New </a></td>
				</tr>	
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>

@stop()