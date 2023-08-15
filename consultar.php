<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <title>Projeto Web</title>
</head>

<body class="text-bg-light">
    <div class="container text-center">
        <div class="row bg-primary">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
        <div class="row bg-white">
            <div class="col">
                &nbsp;
            </div>
            <div class="row">
                <div class="col text-start">
                    <form name="cadastro" method="POST" action="">
                        <p class="fs-1">CONSULTA - CLIENTE</p>
                        <div class="mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Mark</td>
                                        <td>(11)98255-6633</td>
                                        <td><div class="d-grid gap-2 d-md-block">
                                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                                <button type="button" class="btn btn-primary btn-sm">Excluir</button>
                                        </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Jacob</td>
                                        <td>(11)2566-5533</td>
                                        <td><div class="d-grid gap-2 d-md-block">
                                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                                <button type="button" class="btn btn-primary btn-sm">Excluir</button>
                                        </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                </div>
            </div>
</body>

</html>