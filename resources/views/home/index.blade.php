<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Home</h2>

    @auth
        <p>Pagina de inicio <b>{{auth()->user()->name ?? auth()->user()->username }}</b></p>
        <p><a href="/logout">Salir</a></p>
    @endauth

    @guest
        <p>Inicia sesión <a href="/login">aquí</a></p>
    @endguest
</body>
</html>