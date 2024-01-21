@extends('backend.layouts.app')

@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

          <!-- Table with stripped rows -->
          @if(session('msg'))
          <div class="alert alert-danger">
            {{session('msg')}}
          </div>
          @endif
          <table class="table datatable">
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
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


@endsection


