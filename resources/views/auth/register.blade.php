<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="username" value="cesar">
        <input type="email" name="email" value="cesar@dom.com">
        <input type="password" name="password" value="123456789">
        <input type="password" name="password_confirmation" value="123456789">
        <input type="submit" value="Register">
    </form>
</body>
</html>