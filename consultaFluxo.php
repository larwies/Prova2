<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Fluxo de Caixa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Consulta Saldo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Ínicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastroFluxo.php">Cadastra Fluxo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listarFluxo.php">Listar Fluxo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="consultaFluxo.php">Consulta Saldo</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="form-container d-flex flex-column justify-content-center align-items-center">
        <form action="consultaFluxoExe.php" method="post" >
            <fieldset>
                <legend>Consulta de Fluxo de caixa</legend>
                <div class="row g-3 align-items-center m-2">
                    <div class="col-auto">
                        <label for="tipo" class="col-form-label">Tipo de consulta:</label>
                    </div>
                    <div class="col-auto">
                        <label for="tipo">Saldo Total</label>
                        <input type="radio" name="tipo" id="tipo" value="saldo"><br>
                        <label for="tipo">Total Saídas</label>
                        <input type="radio" name="tipo" id="tipo" value="saida"><br>
                        <label for="tipo">Total Entradas</label>
                        <input type="radio" name="tipo" id="tipo" value="entrada">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-submit">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>