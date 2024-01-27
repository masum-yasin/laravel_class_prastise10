<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route('user.store')}}" method="post">
    @csrf
    <div>
      <label for="">Password</label>
      <input type="password" name="password" class="form-control" required><br>
      <button type="submit" class="btn btn-success">SUBMIT</button>
    </div>
  </form>
</body>
</html>