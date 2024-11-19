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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-nos.html">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="planos.html">Planos</a>
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

    <main class="container mt-5 mb-5">

        <div class="row">
            <div class="col-lg-5 mx-auto text-center">
                <img src="/img/logo.png" alt="todolist" width="150">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mx-auto text-center mt-4 text-primary">
                <h1>Organize tudo com o Sistema TodoList</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto text-center mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui blanditiis ipsa quo neque velit,
                    suscipit optio doloribus ab mollitia, impedit amet, laudantium cum ea placeat tempore excepturi.
                    Corporis, porro ullam?</p>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto text-center mt-3">
                <a href="/planos" class="btn btn-lg btn-primary">Conheça Nossos Planos</a>
            </div>
        </div>

    </main>

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
