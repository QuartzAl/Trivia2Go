<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
<a class="return" href="{{route('welcome')}}">
    return
</a>
<div class="center">
    <h1>LOGIN</h1>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="txt_field">

            <input id="email" type="email" class="ext-input @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <label for="email">Username</label>
        </div>
        <div class="txt_field">
            <input id="password" type="password" class="text-input @error('password') is-invalid @enderror"
                   name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <label for="password">Password</label>
        </div>

        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
        <input type="submit" value="{{ __('Login') }}">

        <div class="signup_link">
            @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
        <div class="signup_link">
            Haven't registered? <a href="{{route('register')}}">SIGN UP</a>
        </div>
    </form>
</div>
<div class="image">
    <img src="./assets/img/quiz.jpg" alt="avatar" width="550" height="423">
</div>

</body>
</html>

