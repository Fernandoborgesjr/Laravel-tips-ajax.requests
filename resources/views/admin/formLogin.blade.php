<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
    
        <form class="form-signin form" method="post" action="{{ route('admin.login.do') }}">
            @csrf
            @if($errors->all())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
            @endforeach
            @endif
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password">
            </div>
            <button class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>

</html>