<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <a href="{{route('class.index')}}" class="btn btn-info mb-3 mt-2" style="float:right">All Class</a>
        @if(session('success'))
    <div class="p-4 bg-green-100">
        {{ session('success') }}
    </div>
        @endif
    <form method="post" action="{{route('class.store')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Class Name</label>
          <input type="text" class="form-control"   class="@error('name') is-invalid @enderror" id="exampleInputEmail1"  placeholder="Class Name" name="name" value="{{old('name')}}">
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>