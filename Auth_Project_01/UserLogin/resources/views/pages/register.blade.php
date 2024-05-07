<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>

<body>

    <nav class="navbar navbar-expand-lg " data-bs-theme="dark" id="section-1">
        <div class="container-fluid p-3">
            <a href="" class="navbar-brand fs-4 logo">VR2C </i></a>
            <button class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <div class="regster">
                        <a href="/">Login</a>
                    </div>
                    {{-- <li class="nav-item"><a href="" class="nav-link ">Home</a>
                        <span></span>
                    </li>

                    <li class="nav-item"><a href="" class="nav-link ">About</a></li>
                    <li class="nav-item"><a href="" class="nav-link ">Services</a></li>
                    <li class="nav-item"><a href="" class="nav-link ">Contact</a></li>
                    <li class="nav-item"><a href="" class="nav-link ">Help</a></li> --}}
                </ul>
                <div class="buttons">
                </div>
            </div>
        </div>
    </nav>

    <section class="registration">
        <div class="container text-light">
            <form action="/store" method="POST">
                @csrf
                <h1>User Registraion</h1>
                <!-- Row One -->
                <div class="row mt-3 fw-bold">
                    <div class="col-md-12">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" name="name" class="form-control  @if ($errors->has('name'))
                        {{'is-invalid'}}
                        @endif">
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">{{$errors->first()}}</div>
                        @endif
                    </div>
                </div>
                <!-- Row two -->
                <div class="row mt-3 fw-bold">
                    <div class="col-md-12">
                        <label for="" class="form-label">User Email</label>
                        <input type="email" name="email" class="form-control @if ($errors->has('email'))
                            {{'is-invalid'}}
                        @endif">
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                </div>
                <!-- Row three -->
                <div class="row mt-3 fw-bold">
                    <div class="col-md-12">
                        <label for="" class="form-label">User Password</label>
                        <input type="password" name="password" class="form-control @if ($errors->has('password'))
                            {{'is-invalid'}}
                        @endif">
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                </div>
                <!-- Row four -->
                <div class="row mt-3 fw-bold">
                    <div class="col-md-12">
                        <label for="" class="form-label">User Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control @if ($errors->has('password'))
                            {{'is-invalid'}}
                        @endif">
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="button mt-2 text-center">
                    <input type="Submit" name="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>