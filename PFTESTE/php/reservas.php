<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Uniformes</title>
</head>
<body>
<?php include("navbarGremio.php"); ?>
    
    <form method="POST" action="reservas.php">
<br>
        <h2>Especificações dos pedidos</h2>

        <label for="id">Digite o ID do pedido que deseja buscar:</label>
        <input type="number" name="id" id="id" required>

        <input type="submit" id="botao" value="Buscar" class="btn btn-primary" required>

    </form>
    <br>
    <hr/>

<?php

    include('conf/conecta.php');

    $sql = "SELECT * FROM ((pedidos_itens INNER JOIN pedidos ON pedidos_itens.pedido = pedidos.codigo) INNER JOIN produtos ON pedidos_itens.produto = produtos.id) ";

    $sql2 = "SELECT email FROM ((pedidos_itens INNER JOIN pedidos ON pedidos_itens.pedido = pedidos.codigo) INNER JOIN produtos ON pedidos_itens.produto = produtos.id) ";

    $sql3 = "SELECT DISTINCT pedido FROM ((pedidos_itens INNER JOIN pedidos ON pedidos_itens.pedido = pedidos.codigo) INNER JOIN produtos ON pedidos_itens.produto = produtos.id) ";

    $result3 = $conn->query($sql3) or die($conn->error);

    /*while($dado3 = $result3->fetch_array()) {

        echo $dado3["pedido"] . "<br>";
        //echo $dado3["nome"] . "<br>";
        //echo "Quantidade: " . $dado3["quantidade"] . "<br><br>";
        //echo "<hr/>";


    }*/

    echo "<h2>Pedidos existentes: </h2>";

    if(!empty($_POST)) {

        //$sql .= "WHERE (1=1)";

        if(isset($_POST['id'])) {

            $id = $_POST['id'];
            $sql .= "WHERE pedido = '$id'";
            $sql2 .= "WHERE pedido = '$id'";

            $result = $conn->query($sql) or die($conn->error);
            $result2 = $conn->query($sql2) or die($conn->error);

            $groupby = "SELECT SUM(valor) as total FROM ((pedidos_itens INNER JOIN pedidos ON pedidos_itens.pedido = pedidos.codigo) INNER JOIN produtos ON pedidos_itens.produto = produtos.id) WHERE pedido = '$id'";
            $result1 = $conn->query($groupby) or die($conn->error);

            $dado1 = $result1->fetch_array();
            $dado2 = $result2->fetch_array();

            $email = $dado2['email'];

            $email_infos = "SELECT * FROM usuarios WHERE email = '$email'";
            $resultado = $conn->query($email_infos) or die($conn->error);

            $dado3 = $resultado->fetch_array();

            echo "<h3>ID do pedido: " . $id . "</h3><br>"; 
            echo "Email da compra: " . $email . "<br>";
            echo "Nome do aluno: " . $dado3['nome'] .  " " . $dado3['sobrenome'] . "<br>";
            echo "Curso: " . $dado3['curso'] . "<br><br>";
            echo "Valor total a ser pago: " . $dado1['total'] . "<br><br><br>";

            while($dado = $result->fetch_array()) {

                echo $dado["nome"] . "<br>";
                echo "Quantidade: " . $dado["quantidade"] . "<br><br>";
                echo "<hr/>";

            }

        }







    }
    else {
        while($dado3 = $result3->fetch_array()) {

            echo "ID do pedido: " . $dado3["pedido"] . "<br><br>";
            //echo $dado3["nome"] . "<br>";
            //echo "Quantidade: " . $dado3["quantidade"] . "<br><br>";
            //echo "<hr/>";
    
    
        }
    }

?>

</body>
</html>
