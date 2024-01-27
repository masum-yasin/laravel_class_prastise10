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
              
             
              <form class="forms-sample" method="post" action="{{route('students.update',$student->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                  <label for="exampleInputName1">Student Name</label>
                  <input type="text" class="form-control"  placeholder="Name" name="name"  value="{{($student->name)}}" required>
                </div>
       
                <div class="form-group">
                    <label for="exampleInputName1">Phone Number</label>
                    <input type="number" class="form-control"  placeholder="Phone" name="phone" value="{{($student->phone)}}" required>
                  </div>
                            
                <div class="form-group">
                    <label for="exampleInputName1">Class</label>
                    <select name="class"  class="form-control">
                            
                            @foreach ($classes as $class)
                              <option value="{{$class->id}}" @if ($class->id==$student->class_id) selected
                                  
                                @endif>{{$class->name}}</option>
                            @endforeach
                    </select>
                   
                  
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Roll Number</label>
                  <input type="number" class="form-control" id="exampleInputEmail4" placeholder="Roll Number" name="roll"  value="{{($student->roll)}}" required>
                </div>
              
                <div class="form-group">
                    <label for="exampleInputEmail3">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Email" name="email" value="{{($student->email)}}" required>
                  </div>
                
              
                <button type="submit" class="btn btn-primary mr-2">UPDATE</button>
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