@extends('backend.layouts.app')
@section('content')
    
  <main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Item</h5>
           

              <!-- General Form Elements -->
              <form method="post" action="{{route('category.update',['id'=> $single['id']])}}">
                @csrf
                <div class="row mb-3 ">
                  <label for="inputText" class="col-sm-4 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{old('name')? old('name'):$single['name']}}">
                  </div>
                </div>
                
            <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      
      </div>
    </section>

  </main><!-- End #main -->
@endsection