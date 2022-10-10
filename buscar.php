<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bem Estar</title>

    <style>
        .editar:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body style="background-color: #edece6;">
    <header>
        <nav class="navbar navbar-expand-lg sticky-top bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 fw-bold text-success" href="./">Bem Estar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-success fw-semibold" aria-current="page" href="./">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success fw-semibold" href="./buscar.php">Buscar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4 p-3 rounded bg-light">
        <div class="row">
            <div class="col-12">
                <span class="fw-bold text-success fs-5">Buscar Paciente</span>
            </div>
        </div>

        <hr>

        <div class="row mt-3">
            <div class="col-12 col-lg-4 mb-3">
                <div class="form-floating ">
                    <input type="text" class="form-control" id="nomeBusca" placeholder="Nome">
                    <label for="nomeBusca"><i role="button" class="fa-solid fa-magnifying-glass"></i>&nbsp;Nome</label>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-floating">
                    <select class="form-select" id="filtro" aria-label="Filtro">
                        <option selected value="">Selecione</option>
                        <option value="fuma">Fumante</option>
                        <option value="bebe">Bebe</option>
                        <option value="hipertensao">Hipertenso</option>
                        <option value="diabete">Diabético</option>
                        <option value="doenca_cardiaca">Cardiopata</option>
                        <option value="medicacao">Medicação</option>
                    </select>
                    <label for="filtro">Filtro</label>
                </div>
            </div>
        </div>

        <hr>

        <div class="row mt-3">
            <div class="col-12 table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-success" scope="col">#</th>
                            <th class="text-success" scope="col">Nome</th>
                            <th class="text-success" scope="col">E-mail</th>
                            <th class="text-success" scope="col">Editar</th>
                            <th class="text-success" scope="col">Inserir Exame</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center"><span>Nenhum paciente encontrado</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>

</html>