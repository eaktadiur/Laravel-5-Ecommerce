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
					@foreach ($categorys as $category)
					<tr>
						<td>{{$category->name}}</td>
					</tr>	
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-log-12">
			 <a class="btn btn-primary" href="{{URL::route('category')}}"> New </a>
		</div>
	</div>
</div>

@stop()