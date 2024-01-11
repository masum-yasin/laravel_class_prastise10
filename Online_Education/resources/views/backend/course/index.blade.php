@extends('backend.layouts.app')
@section('title','all Course Here')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Hoverable Table</h4>
              <p class="card-description"> Add class <code>.table-hover</code>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Course Name</th>
                      <th>Course Fee</th>
                      <th>Course Category Id</th>
                      <th>Course Duration</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($courses as $course)
                      <tr>
                      <td>{{$course['id']}}</td>
                      <td>{{$course['course_name']}}</td>
                      <td>{{$course['course_fee']}}</td>
                      <td>{{$course['course_category_id']}}</td>
                      <td>{{$course['course_duration']}}</td>
                      <td>{{$course['description']}}</td>
                      <td>
                        <a href="course/delete/{{$course['id']}}"><i class="btn btn-danger">Delete</i></a>
                          <a href="course/edit/{{$course['id']}}"><i class="btn btn-warning">Edit</i></a>
                      </td>
                      </tr>
                      @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
       
       
      
        
      </div>
    </div>
    
    <!-- partial -->
  </div>
@endsection