<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="{{ route('user.store') }}"
    method="post" 
    style="display:flex; flex-direction:column; align-items:center; justify-content:center">
    @csrf
        <label for="name" style="margin-top: 5px;">Nome do usuário</label>
        <input name="name" type="text">
        <label for="email" style="margin-top: 10px;">E-mail</label>
        <input name="email" type="email">
        <label for="password" style="margin-top: 10px;">Senha</label>
        <input name="password" type="password">
        <input type="submit" value="Cadastrar usuário" style="margin-top: 10px;">
    </form>
</body>
</html>