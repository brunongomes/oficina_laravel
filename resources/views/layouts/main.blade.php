<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" />
    
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a class="navbar-brand" href="/">
                    <img src="/img/engenharia_de_computacao.png" width="60" height="60" class="d-inline-block align-top"
                        alt="Oficina">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/produtos" class="nav-link">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/produtos/create" class="nav-link">Cadastrar produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contatos" class="nav-link">Contatos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    @yield('content')
    <footer>
        <p>Vinícius Duarte Lopes @ Univiçosa &copy; 2021</p>
    </footer>
</body>
