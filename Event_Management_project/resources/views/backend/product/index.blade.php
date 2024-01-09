@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Categories List</h4>
							</div>
							
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			
				<!-- Striped table start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						
						
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Event Name</th>
								<th scope="col">Description</th>
								<th scope="col">Price</th>
								<th scope="col">Category_ID</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($products as $product)
								
							
							<tr>
								<th scope="row">{{$product['id']}}</th>
								<td>{{$product['name']}}</td>
								<td>{{$product['description']}}</td>
								<td>{{$product['price']}}</td>
								<td>{{$product['category_id']}}</td>
								<td>
									<a href="product/delete/{{$product['id']}}"><i class="btn btn-danger">Delete</i></a>
									<a href="product/edit/{{$product['id']}}"><i class="btn btn-warning">Edit</i></a>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
					
				</div>
			</div>
		
		</div>
	</div>
@endsection