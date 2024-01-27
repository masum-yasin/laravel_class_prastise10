@extends('backend.layouts.app')
@section('title', 'Search')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>General Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Default Table -->
            <form action="" method="get">
                <input type="text" name="search" placeholder="">
                <select name="cat" id="">
                  <option value="">Select One</option>
                  <option value="1">Shirt</option>
                  <option value="2">Pant</option>
                  <option value="3">Shoe</option>
                  <option value="4">Balt</option>
                </select>
                <input type="submit" name="submit" value="SEARCH">
            </form>
           @if(count($products)>0)

              <table class="table">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th> 
                      <th>Image</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Tags</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                @foreach($products as $item)  
                  <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->price}}</td>
                      <td><img src="{{asset('uploads/'.$item->image)}}" alt="Image" width="50px" height="50px"></td>
                      <td>{!!$item->description!!}</td>
                      <td>{{$item->category->name}}</td>
                      <td>
                        {{-- {{implode(",", $item->tags)}} --}}
                        @foreach($item->tags as $tag)
                        <li>{{$tag}}</li>
                        @endforeach
                      </td>
                      <td class="d-flex justify-content-between gap-2"> 
                        <a href="{{route('product.edit', $item->id)}}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{route('product.delete',$item->id)}}" class="btn btn-sm btn-info">Delete</a></td> 
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
              @else
              <h1>No data found</h1>
                  @endif
            
         
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection