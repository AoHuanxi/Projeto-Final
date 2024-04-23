<?php

include('conf/conecta.php');

session_start();

$email = $_SESSION['email_logado'];

$sql_user = "SELECT * FROM usuarios WHERE email = '$email'";

$result = $conn->query($sql_user) or die($conn->error);


if(isset($_GET['acao'])) {

    if($_GET['acao'] == 'logout') {

        session_destroy();
        header("Location:sitedogremio.php");

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Meu perfil</title>
    
</head>
<header>
<?php include('navbarAluno.php'); ?>

</header>
<body>
  <div class="container card shadow w-50 bg-light mt-5" style="border-radius: 15px;">
    <div class="row align-items-stretch">
      <div class="col card-body">
        <div class="card-title border-bottom w-auto border-2 mb-2 row" style="">
          <h2 class="fs-5 fw-bold text-left login mb-2 col-10"><i class="fa-solid fa-user"></i> Meu perfil</h2>
          <h2 class="fs-5 fw-bold text-right login mb-2 col"><a class="btn btn-outline-danger btn-sm" href="?acao=logout"><i class="fa-solid fa-right-from-bracket"></i> Sair</a></h2>
        </div>
        <div class="card-text">
          <div class="nome row">
          <?php while($info = $result->fetch_array()) {  ?>

            <div class="col-5 ms-2"><h3 class="fs-6 mt-3">Nome: </h3><p class="lead"><?php echo $info["nome"]; ?></p> </div>
            <div class="col-5 ms-2"><h3 class="fs-6 mt-3">Sobrenome: </h3><p class="lead"><?php echo $info["sobrenome"]; ?></p> </div>
            <div class="col-5 ms-2"><h3 class="fs-6 mt-1">Email Institucional: </h3><p class="lead"><?php echo $email;?></p></div>
            <div class="col-5 ms-2"><h3 class="fs-6 mt-1">Turma: </h3><p class="lead"><?php echo $info["ano"] . " - " . $info["curso"];} ?></p></div>
          </div>
        </div>
        <div class="card-title border-bottom w-auto border-2 mb-2 mt-4" style="">
          <h2 class="fs-5 fw-bold text-left login mb-2"><i class="fa-solid fa-cart-shopping"></i> Minhas Reservas</h2>
        </div>
        <div class="card-text">
          <div class="mt-2 mb-1"><h3 class="fs-6 mt-1"><b class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> ATENÇÃO: </b>Apresente o número do seu pedido ao gremista responsável pelas vendas. O pagamento é realizado na sala do grêmio!</h3></div>
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Número do pedido</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Quantidade</th>

                </tr>
              </thead>
              <tbody>
              <?php

if (mysqli_num_rows($result) > 0){

   $sqlreservas = "SELECT * FROM ((pedidos_itens INNER JOIN pedidos ON pedidos_itens.pedido = pedidos.codigo) INNER JOIN produtos ON pedidos_itens.produto = produtos.id) where email = '$email'";

   $result1 = $conn->query($sqlreservas) or die($conn->error);

if (mysqli_num_rows($result1) > 0){

   while($dado1 = $result1->fetch_array()) {
?>
                <?php
               echo '<tr>';
                echo '<th scope="row">' . $dado1['pedido'] . '</th>';
                echo '<th scope="row">' . $dado1['nome'] . '</th>';
                echo '<th scope="row">' . $dado1['quantidade'] . '</th>';

                echo '</tr>';}
                    }
                }
                ?>
             
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/77ba0c090e.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>