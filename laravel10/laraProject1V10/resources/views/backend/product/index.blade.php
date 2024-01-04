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
            <table class="table datatable">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Action</td>
                </tr>
                @foreach ($products as $item)
                    
              
                <tr>
                  <td>{{$item['id']}}</td>
                  <td>{{$item['name']}}</td>
                  <td>{{$item['description']}}</td>
                  <td>{{$item['price']}}</td>
                  <td><a href="category/edit/{{$item['id']}}"><i class="btn btn-warning">Edit</i></a>
                  <a href=""><i class="btn btn-danger">Edit</i></a></td>
                 
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