<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is Teacher Login</h1>
    <form action="{{route('teacher.store')}}" method="post">
        @csrf
        Email:<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>
       <button type="submit">Login</button>
    </form>
</body>
</html>