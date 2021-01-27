
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
</head>
<body>
    

<h1>{{ $user->name }}</h1>

<p>{{ $user->email }}</p>
<p>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
<p>Rua: {{ $address->street }}</p>
<p>Número: {{ $address->number }}</p>
<p>Cidade: {{ $address->city }}</p>
<p>Estado: {{ $address->state }}</p>
<h1>Posts</h1>
@foreach ($posts as $post)
<p>Titulo: {{ $post->title }}</p>
@endforeach


</body>
</html>