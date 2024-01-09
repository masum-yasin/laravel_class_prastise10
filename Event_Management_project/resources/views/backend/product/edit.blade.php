@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">New Event  Forms</h4>
					</div>
					</div>
					<form method="post" action="{{route('product.update',['id'=>$product['id']])}}">
						<div class="form-group row">
							@csrf
							<label class="col-sm-12 col-md-2 col-form-label">Event Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Event Name" name="name" value="{{old('name')? old('name'):$product['name']}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea name="desc" id="" cols="90" rows="5" class="form-control" ></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Event Price" name="price" value="{{old('price')? old('price'):$product['price']}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
							<div class="col-sm-12 col-md-10">
								{{-- <select name="category" id="" class="form control" value="{{old('name')? old('name'):$product['name']}}">
									<option value="Selected">Select Event Category</option>
									@foreach ($categories as $item)
									<option value="{{$item->id}}">{{$item->name}}</option>
									@endforeach

								</select> --}}
							</div>
						</div>
						
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<button type="submit" class="form-control">Submit</button>
							</div>
						</div>
					</form>
					
					</div>
				</div>
		

			</div>
		
		</div>

@endsection