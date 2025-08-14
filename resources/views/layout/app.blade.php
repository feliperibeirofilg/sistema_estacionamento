<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
</head>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darl">
        <div class="collapse navbar-collapse" id="navbar Nav">
            <a href="/">Welcome</a>
            <a href="/empresa/cadempresa">Cadastrar Empresa</a>
            <a href="/empresa/listaempresa">Empresas</a>
        </div>
    </nav>

    <dev>
        @yield('content')
    </dev>
</body>
</html>