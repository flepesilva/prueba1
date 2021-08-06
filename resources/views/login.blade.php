<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')
    <h1>Login</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST">
        @csrf
        <label>
            <input name="email" type="text" required autofocus value="{{old('email')}}" placeholder="Email...">
        </label>
        <br>
        <label>
            <input name="password" type="password" placeholder="Contraseña...">
        </label>
        <br>
        <label>
            <input type="checkbox" name="remember">
            Recuerda la sesion
        </label>
        <br>

        <button type="submit">Login</button>

    </form>
</body>
</html>