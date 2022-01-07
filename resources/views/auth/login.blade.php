<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .form-check-input:hover {
            cursor: pointer;
        }

    </style>
</head>

<body>
    <form action="{{ route('login') }}" method="post" sty>
        @csrf
        <div class="container" style="padding: 00px 100px; padding-top: 30px; margin-top: 120px;">
            <div class="row">
                <div class="col-6 offset-3"
                    style="box-shadow: 0px 0px 5px 1px #ccc; padding: 15px 15px; border-radius: 5px;">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-5" style="padding-top: 6px; text-align: right;"><a href="{{ route('password.request') }}"
                                style="color: #555;">Forgot Your Passwrod</a></div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-secondary">LOGIN IN</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    Don't have an account yet. <a href="{{ route('register') }}">Sign up</a> now.
                </div>
            </div>
        </div>
    </form>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
