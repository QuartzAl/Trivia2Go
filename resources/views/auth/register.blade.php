<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
<a class="return" href="{{route('welcome')}}">
    return
</a>
<div class="center">
    <h1>SIGN UP</h1>
    <form method="post" action="{{url('register')}}">
        @csrf
        <div class="txt_field">
            <input id="name" type="text"
                   class="@error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label for="name">Username</label>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="txt_field">
            <input id="email" type="email"
                   class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email">
            <label for="email">Email</label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="txt_field">
            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror" name="password"
                   required autocomplete="new-password">
            <label for="password">Password</label>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="txt_field">
            <input id="password_confirmation" type="password"
                   class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                   required autocomplete="new-password_confirmation">
            <label for="password_confirmation">Confirm Password</label>
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <input type="submit" value="{{__('SIGNUP')}}">
        <div class="signup_link">
            Already have an account? <a href="{{route('login')}}">LOGIN</a>
        </div>
    </form>
</div>
<div class="image">
    <img src="./assets/img/quiz.jpg" alt="avatar" width="550" height="423">
</div>

</body>
</html>
