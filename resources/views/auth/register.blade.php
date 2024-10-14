<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div class="container d-flex align-item-center justify-content-center" style="height: 100vh; width:100%;">
        <div class="card my-auto mx-auto">
            <div class="card-body rounded">
                <h3 class="text-center mb-5">Register Admin</h3>
                <form method="POST" action="{{ route('registProses') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama lengkap</label>
                                    <input type="text" name="nama" value="{{ old('nama') }}" required
                                        autocomplete="nama" autofocus
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="exampleFormControlInput1" placeholder="Nama lengkap">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                    <input type="text" name="nik" value="{{ old('nik') }}" required
                                        autocomplete="nik" autofocus
                                        class="form-control @error('nik') is-invalid @enderror"
                                        id="exampleFormControlInput1" placeholder="NIK">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Foto</label>
                                    <input type="file" name="foto" value="{{ old('foto') }}" required
                                        autocomplete="foto" autofocus
                                        class="form-control @error('foto') is-invalid @enderror">
                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="exampleFormControlInput1" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}" required
                                        autocomplete="password" autofocus
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                                    <input type="password" name="confirmPass" value="{{ old('confirmPass') }}" required
                                        autocomplete="email" autofocus
                                        class="form-control @error('confirmPass') is-invalid @enderror"
                                        id="exampleFormControlInput1">
                                    @error('confirmPass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary" style="width:97%">
                                {{ __('Register') }}
                            </button>
                            <a href="{{ route('login') }}" class="text-center my-3">Sudah Punya Akun?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
