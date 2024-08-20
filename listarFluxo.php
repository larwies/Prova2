<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Fluxo de Caixa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px; /* Espaçamento para a navbar fixa */
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff; /* Cor de fundo da navbar */
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff !important; /* Cor do texto da navbar */
        }
        .navbar-nav .nav-link.active {
            font-weight: bold; /* Destaca o item ativo */
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #343a40;
        }
        .table-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .table {
            background-color: #ffffff;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            text-align: center;
        }
        .table th {
            background-color: #007bff;
            color: #ffffff;
        }
        .table a {
            color: #007bff;
        }
        .table a:hover {
            text-decoration: underline;
        }
        .table .btn {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Lista Fluxo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Ínicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastraFluxo.php">Cadastra Fluxo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listaFluxo.php">Lista Fluxo</a>
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
    $sql = "SELECT id, data, tipo,valor,historico,cheque FROM fluxo_caixa";
    // Executa a consulta
    $result = mysqli_query($con, $sql);
    ?>

    <div class="container table-container">
        <h1>Consulta de Fluxo</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Histórico</th>
                    <th>cheque</th>
                    <th>Alterar</th>
                    <th>Deleta</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($row = mysqli_fetch_array($result)) {
                    $data_orig = $row['data'];
                    $data = new DateTime($data_orig);
                    $data_formatada = $data->format('d-m-Y');
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$data_formatada."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href='alteraFluxo.php?id=".$row['id']."' class='btn btn-warning btn-sm'>Alterar</a></td>";
                    echo "<td><a href='excluirFluxo.php?id=".$row['id']."' class='btn btn-danger btn-sm'>Deletar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>