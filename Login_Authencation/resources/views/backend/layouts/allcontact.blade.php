@extends('backend.layouts.app')
@section('title','Contact page')
 
    @include('backend.layouts.header')

	@include('backend.layouts.rightsidebar')
	@include('backend.layouts.leftsidebar')

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($messages as $item)
    
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['message']}}</td>
        
      </tr>
              
      @endforeach
    
      
    </tbody>
  </table>
@endsection