<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
    <form action="{{ url('/user/signup') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password" required>
    
    <button type="submit">Submit</button>
    </form>
</body>
</html>
