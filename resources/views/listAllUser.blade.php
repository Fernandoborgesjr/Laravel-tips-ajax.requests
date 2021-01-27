<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
</head>
<body>
<a href="{{ route('user.create' ) }}">Cadastrar Usuário</a>
<table>
    <tr>
        <td>#ID</td>
        <td>Nome:</td>
        <td>E-mail</td>
        <td>Ações:</td>
    </tr>
    
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        <a href="{{ route('user.show', ['user' => $user->id] ) }}">Ver Usuário</a>
        <a href="{{ route('user.edit', ['user' => $user->id] ) }}">Editar</a>
            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="User" value="{{$user->id}}">
            <input type="submit" value="Remover">
            </form>
        
        </td>
    </tr>
    @endforeach
</table>
<a href="https://www.youtube.com/watch?v=_fDd_RKKWzk&list=PLi_gvjv-JgXqop7hgVKZMGPiT9rUYy1sr&index=4&ab_channel=RobsonV.Leite" target="_blank">Episódio 4</a>

</body>
</html>