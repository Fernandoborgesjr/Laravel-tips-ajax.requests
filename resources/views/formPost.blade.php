<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigos</title>
</head>

<body>
    <form action="{{ route('debug') }}" method="post"
    style="display:flex; flex-direction:column; align-items:center; justify-content:center">
        @csrf
        <label>Título</label>
        <input type="text" name="title">
        <label>Subtítulo</label>
        <input type="text" name="subtitle">
        <label>Conteúdo</label>
        <textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value="Cadastrar artigo" style="margin-top: 10px;">
    </form>
    <a href="https://www.youtube.com/watch?v=y6NtLvbtDs0&list=PLi_gvjv-JgXqop7hgVKZMGPiT9rUYy1sr&index=6&ab_channel=RobsonV.Leite" target="_blank">Episódio 6 - Model</a>
</body>

</html>