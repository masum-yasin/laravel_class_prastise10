
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
  
    <h1>All most Student</h1>
    @if(session('success'))
    <div class="p-4 bg-green-100">
        {{ session('success') }}
    </div>
        @endif
    <a href="{{route('students.create')}}" style="float: right;" class="btn btn-info mb-5">Add New student</a>
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Student name</th>
            <th scope="col">Phone</th>
            <th scope="col">Roll</th>
            <th scope="col">Email</th>
            <th scope="col">Class_ID</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $key=>$student)
      
          <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->class_id}}</td>
            <td class="d-flex justify-between gap-2">
              <a href="{{route('students.show',$student->id)}}"><i class="btn btn-info">Show</i></a>

                <a href="{{route('students.edit',$student->id)}}"><i class="btn btn-info">Edit</i></a>
      
               <form action="{{route('students.destroy',$student->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                {{-- <input type="hidden" name="_token" value="csrf_token"> --}}
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
               </form>
            </td>
            
          </tr>
                    
          @endforeach
         
         
        </tbody>
      </table>

</body>
</html>