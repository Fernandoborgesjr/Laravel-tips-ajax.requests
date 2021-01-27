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

        <form class="form-signin form" id="formLogin">
            @csrf

            <div class="alert alert-danger d-none messageBox" role="alert">
            </div>

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('#formLogin').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    //A rota ara qual será enviado o formulário
                    url: "{{ route('admin.login.do') }}",
                    type: "post",
                    /*Esse serialize verifica todos os campos do formulário
                     * criando chave:valor
                     */
                    data: $(this).serialize(),
                    //Indica o retorno esperado
                    dataType: 'json',
                    //Função que será executada caso tenha sucesso na requisição
                    success: function(resp) {
                        
                        if (resp.success === true) {
                            window.location.href = "{{ route('admin') }}"
                        }
                        $('.messageBox').removeClass('d-none').html('<span>' + resp.message + '</span>');
                    }
                });
            });
        });
    </script>
</body>

</html>