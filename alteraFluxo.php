<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql ="SELECT * FROM fluxo_caixa WHERE id=$id";
    $result =  mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Altera Fluxo Caixa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Altera Fluxo</a>
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
                <a class="nav-link" href="listarFluxo.php">Lista Fluxo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="consultaFluxo.php">Consulta Saldo</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="form-container d-flex flex-column justify-content-center align-items-center">
        <form action="alteraFluxoExe.php" method="post" >
            <fieldset>
                <legend>Cadastro de Fluxo</legend>
                </div>
                <div class="row g-3 align-items-center m-2">
                    <div class="col-auto">
                        <label for="data" class="col-form-label">Data:</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" name="data" id="data" class="form-control" aria-describedby="dataFluxo"value="<?php echo $row['data']?>" required>
                    </div>
                </div>
                <div class="row g-3 align-items-center m-2">
                    <div class="col-auto">
                        <label for="tipo" class="col-form-label">Tipo:</label>
                    </div>
                    <div class="col-auto">
                        <label for="tipo">Saída</label>
                        <input type="radio" name="tipo" id="tipo" value="saida">
                        <label for="tipo">Entrada</label>
                        <input type="radio" name="tipo" id="tipo" value="entrada">
                    </div>
                </div>
                <div class="row g-3 align-items-center m-2">
                    <div class="col-auto">
                        <label for="valor" class="col-form-label">Valor:</label>
                    </div>
                    <div class="col-auto">
                        <input type="decimal" name="valor" id="valor" class="form-control" aria-describedby="valorFluxo" value="<?php echo $row['valor']?>"required>
                    </div>
                </div>
                <div class="row g-3 align-items-center m-2">
                    <div class="col-auto">
                        <label for="historico" class="col-form-label">Histórico:</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="historico" id="historico" class="form-control" aria-describedby="historicoFluxo" value="<?php echo $row['historico']?>"required>
                    </div>
                </div>
                <div class="row g-3 align-items-center m-2">
                    <div class="col-auto">
                        <label for="cheque" class="col-form-label">Cheque:</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" name="cheque" id="cheque" required>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>
                    <div>
                        <input type="hidden" name='id' value="<?php echo $row['id']?>">
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