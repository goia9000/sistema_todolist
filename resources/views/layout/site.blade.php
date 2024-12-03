<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Gerenciamento de Tarefas</title>
    
    <!-- Atualizando o Bootstrap para a versão 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Adicionar Icone no Navegador -->
    <link rel="icon" type="image/png" href="/img/logo-icon.png" />

</head>

<body>
    <!-- Cabeçalho -->
    <header class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong>TodoList</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sobre-nos') }}">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('planos') }}">Planos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="login/entrar.html">Entrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Fim Cabeçalho -->

    <!-- Conteúdo -->
    @yield("conteudo")
    <!-- Fim Conteúdo -->

    <!-- Rodapé -->

    <footer class="container bg-light mt-5">
        <div class="row">
            <div class="col-12 p-3 text-center">
                2019 &copy; - Todos os Direitos são reservados
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (inclui Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>