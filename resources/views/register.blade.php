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
            <h1>Register</h1>
            <form action = "/sesi/create" method = "POST">
                @csrf

                <div class="mb-3">
                    {{-- value = "{{ Session::get('name') }} " --}}
                    <label for = "name" class = "form-label">Name</label>
                    <input type = "text" name = "name" value = "{{old('name')}}"class = "form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "email" class = "form-label">Email</label>
                    <input type = "email" value = "{{old('email')}}" value = "{{ Session::get('email') }} "name = "email" class = "form-control  @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "password" class = "form-label">Password</label>
                    <input type = "password" value = "{{old('password')}}" name = "password" class = "form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "password_confirmation" class = "form-label">Confirm Password</label>
                    <input type = "password" value = "{{old('password_confirmation')}}" name = "password_confirmation" class = "form-control @error('password_confirmation') is-invalid @enderror">
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "DOB" class = "form-label">Date of Birth</label>
                    <input type = "date" name = "DOB" value = "{{old('DOB')}}" class = "form-control @error('DOB') is-invalid @enderror">
                    @error('DOB')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "POB" class = "form-label">Place of Birth</label>
                    <input type = "text" name = "POB" value = "{{old('POB')}}" class = "form-control @error('POB') is-invalid @enderror">
                    @error('POB')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "notelp" class = "form-label">Nomor Telpon</label>
                    <input type = "tel" name = "notelp" value = "{{old('notelp')}}" class = "form-control @error('notelp') is-invalid @enderror">
                    @error('notelp')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for = "gender" class = "form-label">Gender</label>
                    <input type = "text" name = "gender" value = "{{old('gender')}}" class = "form-control @error('gender') is-invalid @enderror">
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 d-grid">
                    <button name = "submit" type = "submit" class = "btn btn-primary">Register</button>
                </div>
            </form>
            <a href="/sesi">Login</a>
        </div>
    </section>
</body>
</html>