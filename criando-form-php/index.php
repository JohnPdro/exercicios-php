<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            background-image: linear-gradient(to left, #00350d, #004210, #004d13 );
            
        }
        .bt-sw:hover{
            background-color: #068200;
            border: #068200;
        }
    </style>
</head>
<body class="p-5">
    <div class="row">
        <div class="col-12 p-5">
            <div class="p-5 p-lg-5">
                <div class="d-flex">
                    <div class="mx-auto">
                        <div class="text-start">
                            <form class="mx-auto" action="validar.php" method="post">
                                <div class="mb-3">
                                    <label for="usuario" class="text-light">Usuario:</label>
                                    <input type="email" placeholder="usuario@gmail.com" name="usuario" id="usuario" class="form-control" required>
                                </div>
                                <div class="password mb-3">
                                    <label class="sr-only text-light" for="senha">Senha:</label>
                                    <input type="password" class="form-control signin-password" placeholder="Senha" name="senha" id="senha" required>
                                </div>
                                <div class="text-center"><button class="btn btn-warning w-100 theme btn mx-auto text-light bt-sw" type="submit">Entrar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</body>
</html>