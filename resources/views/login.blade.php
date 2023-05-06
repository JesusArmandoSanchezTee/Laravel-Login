<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>

</head>
<body>
    {{-- <form action="/login" method="POST">
        @csrf
        username/email
        <input type="text" name="username" id="">
        password
        <input type="password" name="password" id="">

        <input type="submit" value="Login">

    </form> --}}
    <form class="marg" action="/login" method="POST" >
        @csrf
        <div class="container w-25 border p-4">
            <legend class="cen">Login</legend>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" value="Login" class="btn btn-success cen">submit</button>
        </div>
    </form>
    
    <style>
        .marg{
                margin-top: 200px;
        }

        .cen{
            margin-left: 140px;
        }

        body{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
</body>
</html>