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

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('brand.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $brand->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $brand->description }}
                </div>
            </div>
        </div>

    </div>
  </div>
</section>
{{-- {!! $brands->withQueryString()->links('pagination::bootstrap-5')!!} --}}

{{-- {!! $brands->links() !!} --}}
</main><!-- End #main -->




@endsection


