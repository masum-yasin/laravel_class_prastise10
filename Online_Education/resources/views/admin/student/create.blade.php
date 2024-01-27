@extends('backend.layouts.app')
@section('title','New Course Add')
@section('content')
<div class="main-panel">
    
    <div class="content-wrapper">
        <a href="{{route('students.index')}}" class="btn btn-info" style="float: right">All Student</a>
      <div class="page-header">
        <h3 class="page-title"> Add New Student</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
          
          </ol>
        </nav>
      </div>
     
      <div class="row">
        @if(session('success'))
    <div class="p-4 bg-green-100">
        {{ session('success') }}
    </div>
        @endif
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              
             
              <form class="forms-sample" method="post" action="{{route('students.store')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Student Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name"  class="@error('name') is-invalid @enderror" value="{{old('name')}}">
                </div>
                            @error('success')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <div class="form-group">
                    <label for="exampleInputName1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputName2" placeholder="Phone" name="phone" class="@error('phone') is-invalid @enderror" value="{{old('phone')}}>
                  </div>
                            @error('success')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                            
                <div class="form-group">
                    <label for="exampleInputName1">Class</label>
                    <select name="class" id="exampleInputName3" class="form-control">
                            <option value="selected">Course Selected</option>
                            @foreach ($classes as $class)
                              <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                    </select>
                  
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Roll Number</label>
                  <input type="number" class="form-control" id="exampleInputEmail4" placeholder="Roll Number" name="roll" class="@error('roll') is-invalid @enderror" value="{{old('roll')}}>
                </div>
                @error('success')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <div class="form-group">
                    <label for="exampleInputEmail3">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Email" name="email" class="@error('roll') is-invalid @enderror" value="{{old('email')}}">
                  </div>
                  @error('success')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        
      
      
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
   
    <!-- partial -->
  </div>
@endsection