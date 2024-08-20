<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Fluxo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cadastro Fluxo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Ínicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastroFluxo.php">Cadastro Fluxo</a>
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

        <?php
        include('includes/conexao.php');
        $tipo = $_POST['tipo'];
        if($tipo == 'entrada'){
            $sql="SELECT sum(valor) valor from fluxo_caixa where tipo ='entrada'";
            $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)){
            echo "<h2>Total entrada: ".$row['valor']."</h2>";

        }
        }
        else if($tipo == 'saida')
        {
            $sql="SELECT sum(valor) valor from fluxo_caixa where tipo= 'saida'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)){
            echo "<h2>Total saída: ".$row['valor']."</h2>";

        }
        }
        else if($tipo == 'saldo'){
            $sql = "SELECT sum(case when tipo= 'entrada' then valor else 0 end) - sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)){
                echo "<h2>Saldo total: ".$row['valor']."</h2>";
        
            }
        }
            // Executa a consulta
        if($result)
            {
            echo "<h2>Consulta feita com sucesso</h2>";
            }
            else
            {
            echo "<h2> Erro ao Deletar!</h2>";
            echo"<h2>".mysqli_error($con)."</h2>";
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>