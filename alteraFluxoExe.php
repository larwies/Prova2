<?php

    include('includes/conexao.php');
    $id =$_POST['id'];
    $data =$_POST['data'];
    $tipo =$_POST['tipo'];
    $valor =$_POST['valor'];
    $historico = $_POST['historico'];
    $cheque =$_POST['cheque'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <h1>Alteração de Fluxo</h1>
    <?php
    echo "<p>ID: $id</p>";
    echo "<p>DATA: $data</p>";
    echo "<p>TIPO: $tipo</p>";
    echo "<p>VALOR: $valor</p>";
    echo "<p>HISTÓRICO: $historico</p>";
    echo "<p>CHEQUE: $cheque</p>";
        $sql = "UPDATE fluxo_caixa SET 
                    data  = '$data',
                    tipo = '$tipo',
                    valor = '$valor',
                    historico = '$historico',
                    cheque = '$cheque'
                WHERE id = $id ";
        $result = mysqli_query($con,$sql);
        if ($result)
            echo "Dados Atualizados";
        else
            echo "Erro ao Atualizar dados!\n"
            .mysqli_error($con);
    ?>
    <form action="index.html">
    <input type="submit" value="Ir para o Index" />
</body>
</html>