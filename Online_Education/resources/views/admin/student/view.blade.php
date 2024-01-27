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
              <ul class="list">
                <li class="list-item">Name:{{$student->name}}</li>
                <li class="list-item">Class:{{$student->class_id}}</li>
                <li class="list-item">Roll:{{$student->roll}}</li>
                <li class="list-item">Email:{{$student->phone}}</li>
                <li class="list-item">Phone:{{$student->email}}</li>
             </ul>
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