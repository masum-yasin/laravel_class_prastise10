@extends('backend.layouts.app')
@section('content')
    
  <main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Item</h5>

              <!-- General Form Elements -->
              <form method="post" action="{{route('product.store')}}">
                @csrf
                <div class="row mb-3 ">
                  <label for="inputText" class="col-sm-4 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="product">
                  </div>
                </div>
                <div class="row mb-3 ">
                    <label for="inputText" class="col-sm-4 col-form-label">Descriptation:</label>
                    <div class="col-sm-10">
                    <textarea name="desc" id="" cols="90" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3 ">
                    <label for="inputText" class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="price">
                    </div>
                  </div>
                  <div class="row mb-3 ">
                    <label for="inputText" class="col-sm-4 col-form-label">Category</label>
                    <div class="col-sm-10">
                     <select name="category" id="" class="form-select" aria-label="Default select example">
                        <option selected>Select A Category</option>
                        @foreach ($cats as $cat)
                            
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                     
                     </select>
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