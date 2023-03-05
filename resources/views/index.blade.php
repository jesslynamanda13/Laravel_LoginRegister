<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="m-50 w-50 center border rounded px-3 py-3 mx-auto">
            <h1>Login</h1>
            <form action = "sesi/login" method = "POST">
                @csrf
                <div class="mb-3">
                    <label for = "email" class = "form-label">Email</label>
                    <input type = "email" value = "{{ Session::get('email') }} "name = "email" class = "form-control">
                </div>

                <div class="mb-3">
                    <label for = "password" class = "form-label">Password</label>
                    <input type = "password" name = "password" class = "form-control">
                </div>

                <div class="mb-3 d-grid">
                    <button name = "submit" type = "submit" class = "btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>