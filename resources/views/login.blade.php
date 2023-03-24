<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="login-box">
        <img src="" class="login-picture">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="post">
        @csrf
            <div class="input">
                <x-feathericon-user />
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input">
                <x-feathericon-key />
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button class="button" href="">Send</button>
        </form>

    </div>
    {{-- <script src="{{ resources('script/app.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>