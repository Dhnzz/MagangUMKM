<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div class="container d-flex align-item-center justify-content-center" style="height: 100vh; width:100%;">
        <div class="card my-auto mx-auto">
            <div class="card-body rounded">
                <h3 class="text-center mb-5">Login Admin</h3>
                @if (Session('message'))
                    <div class="alert alert-danger my-3" role="alert">
                        {{ Session('message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('authenticate') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col">
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
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary" style="width:97%">
                                {{ __('Login') }}
                            </button>
                            {{-- <a href="{{ route('register') }}" class="text-center my-3">Belum Punya Akun?</a> --}}
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
