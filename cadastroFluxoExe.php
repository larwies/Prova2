<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fluxo</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];

        echo "<h1>Dados de Fluxo</h1>";
        echo "Data: $data<br>";
        echo "tipo: $tipo<br>";
        echo "valor: $valor<br>";
        echo "Histórico: $historico<br>";
        echo "Cheque: $cheque<br>";

        $sql = "INSERT INTO fluxo_caixa
                (data ,tipo ,valor ,historico ,cheque )";
        $sql .= "VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";

        //EXECUTA COMANDO NO BANCO DE DADOS
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }

    ?>
    <form action="index.html">
    <input type="submit" value="Ir para o Index" />
</form>
</body>
</html>