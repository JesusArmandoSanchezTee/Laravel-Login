<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
    <form action="/register" method="POST">
        <div class="container w-25 border p-4">
            @csrf
            <input type="text" name="username">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="password" name="password_confirmation">
            <input type="submit" value="Registrarse">
        </div>
    </form>
</body>
</html>