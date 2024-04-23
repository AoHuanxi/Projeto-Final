<?php

session_start();

include("conf/conecta.php");

$email = $_SESSION['email_logado'];

if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

if(isset($_GET['acao'])) {

    if($_GET['acao'] == 'add') {

        $id = intval($_GET['id']);
        if(!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = 1;
        }
        else {
            $_SESSION['carrinho'][$id] += 1;
        }

    }

    if($_GET['acao'] == 'del') {

        $id = intval($_GET['id']);
        if(isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] -= 1;
        }


    }

    if($_GET['acao'] == 'up') {

        if(is_array($_POST['prod'])) {

            foreach($_POST['prod'] as $id => $qtd) {

                $id = intval($id);
                $qtd = intval($qtd);
                
                if(!empty($qtd) || $qtd <> 0) {
                    $_SESSION['carrinho'][$id] = $qtd;
                }
                else {
                    unset($_SESSION['carrinho'][$id]);
                }
            }
        }

    }
 
}

//print_r($_SESSION['carrinho'])


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>

    <?php include('navbarAluno.php');?>
    <center><div  class="container-fluid w-100">
    <div class="row mb-5 mt-5">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4">Carrinho </h1>
      <p class="lead mb-0">Continue com sua reserva de uniformes!</p>
    </div>
  </div>
    <table class="table w-75 table-striped mt-5">
        

    

        <thead>
            <th scope="col" width="244">Produto</th>
            <th scope="col" width="79">Quantidade</th>
            <th scope="col" width="89">Preço</th>
            <th scope="col" width="100">Subtotal</th>
            <th scope="col" width="64">Remover</th>
        </thead>

    <form action="?acao=up" method="post">

    <tfoot>

        <tr>
            <td colspan="5"><input type="submit" class="btn btn-outline-primary" value="Atualizar Carrinho"> <a href="produtos.php" class="btn btn-outline-primary ms-2">Continuar Comprando</a></td> 
        <tr>
            

    
    </tfoot>

    <tbody>

        <?php   

            if(count($_SESSION['carrinho']) == 0) {
                echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
            }
            else{
                
                $total = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd) {

                    $sql = "SELECT * FROM produtos WHERE id = '$id'";
                    $result = $conn->query($sql) or die($conn->error);
                    $dado = $result->fetch_array();

                    $nome = $dado['nome'];
                    $preco = number_format($dado['preco'], 2, ',', '.');
                    $sub = $dado['preco'] * $qtd;
                
                    $total += $sub;

                    echo '<tr>
                        <td>' . $nome . '</td>
                        <td><input type="text" size="3" name="prod['. $id .']" value="' . $qtd . '"></td>
                        <td>' . $preco . '</td>
                        <td>' . $sub = number_format($dado['preco'] * $qtd, 2, ',', '.')  . '</</td>
                        <td><a href="?acao=del&id=' . $id . '">Remover</a></td>
                        </tr>';   

                }
                $total = number_format($total, 2, ',', '.'); 
                echo '<tr>
                        <td colspan="4">Total</td>
                        <td>R$: ' . $total . '</td>
                    </tr>';


            }

        ?>

    </tbody>
    
    </form>

    </table>
    </div>
        </center>

    <?php
        
        if(count($_SESSION['carrinho']) <> 0) {

            echo '<form action="" method="GET"> 
                  <div class="container-fluid w-75">
                    <p><input type="submit" class="btn btn-danger
                    "name="finalizar" value="Finalizar pedido"></p>
                    </form>';

            if(isset($_GET['finalizar'])) {

                

                $sqlGeraPed = "INSERT INTO pedidos (datahora, total) VALUES (NOW(), 0)";

                mysqli_query($conn, $sqlGeraPed) or die (mysqli_error());

                $x = "SELECT MAX(codigo) as maiorcodigo FROM pedidos";

                $queryconsulta = mysqli_query($conn, $x) or die (mysqli_error());
                $linha =mysqli_fetch_assoc($queryconsulta);
                $ultimo_pedido = 0;
                $ultimo_pedido = $linha['maiorcodigo'];

                foreach($_SESSION['carrinho'] as $id => $qtd) {

                    $sql = "SELECT * FROM produtos WHERE id = '$id'";
                    $result = $conn->query($sql) or die($conn->error);
                    $dado = $result->fetch_array();
                    $valor = $dado[2] * $qtd;

                    $pedidoitem = "INSERT INTO pedidos_itens (produto, quantidade, valor, pedido, email) VALUES ('$id', '$qtd', '$valor', '$ultimo_pedido', '$email')";

                    $conn->query($pedidoitem) or die($conn->error);

                }
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>'.$email.'</strong>, seu pedido foi confirmado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                
            }

        }





    ?>

</body>
</html>