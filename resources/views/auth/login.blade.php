<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        username/email
        <input type="text" name="username">
        <br>
        password
        <input type="password" name="password">
        <br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>