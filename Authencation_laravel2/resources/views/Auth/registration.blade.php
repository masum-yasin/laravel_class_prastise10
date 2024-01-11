@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-4"></div>
    <div class="col-5 p-lg-3">
        <h3>Register Your Account</h3>
      <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="name">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="password" name="password">
          </div>
          <button type="submit" class="bg-warning p-3 w-25">Login</button>
      </form>
          
    </div>
</div>  
@endsection