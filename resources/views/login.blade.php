<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
        <form action="{{url('/user/login')}}" method="POST">
        @csrf
        <label for="email">email</label>
        <input type="email" name="email">
        <label for="password">password</label>
        <input type="password" name="password" id="">
        <button>submit</button>
        </form>   
</body>
</html>