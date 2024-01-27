
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
  
    <h1>All Are Student Hare</h1>
    <a href="{{route('class.create')}}" style="float: right;" class="btn btn-info mb-5">Add New Class</a>
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">class name</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($classes as $key=>$class)
      
          <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$class->name}}</td>
            <td>
                <a href=""><i class="btn btn-info">Edit</i></a>
                <a href="{{route('class.delete',$class->id)}}"><i class="btn btn-danger">Delete</i></a>
            </td>
            
          </tr>
                    
          @endforeach
         
         
        </tbody>
      </table>

</body>
</html>