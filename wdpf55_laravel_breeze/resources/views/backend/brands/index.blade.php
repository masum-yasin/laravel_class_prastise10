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
          <div class="alert alert-success">
            {{ session('msg') }}
          </div> 

      @endif

 
          <table class="table datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                {{-- <th>Category</th>
                <th>Tags</th>
                <th>Action</th> --}}
                
              </tr>
            </thead>
            <tbody>
            @foreach($brands as $item)  
             <tr>
                <td>{{$brands->firstItem()+$loop->index}}</td>
                {{-- <td>{{$item->id}}</td> --}}
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>

                <td class="d-flex justify-content-around">
                    <form action="{{ route('brand.destroy',$item->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ route('brand.show',$item->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('brand.edit',$item->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>

            @endforeach 
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
          <br>
         

        </div>
      </div>

    </div>
  </div>
</section>
{!! $brands->withQueryString()->links('pagination::bootstrap-5')!!}

{{-- {!! $brands->links() !!} --}}
</main><!-- End #main -->




@endsection


