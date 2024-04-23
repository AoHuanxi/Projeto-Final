<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniformes</title>
</head>
<body>
    <?php include("navbarAluno.php");?>
    
    
    <div class="container-fluid w-75">
  <div class="col-lg-8 mx-auto text-center mt-2 mb-5">
      <h1 class="display-2">Uniformes</h1>
      <p class="lead mb-0">Selecione o item que deseja reservar!</p>
  </div>
  

  <div class="mt-5 row row-cols-1 row-cols-md-3 g-4 mb-5">
  <?php

include("conf/conecta.php");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql) or die($conn->error);
while($dado = $result->fetch_array()) {  ?>
  <?php
    echo '<div class="col">';
      echo '<div class="card h-100 shadow rounded-5">';
        echo '<img src="../img/'.$dado['imagem'].'" class="card-img-top" alt="...">';
        echo '<div class="card-body">';
          echo '<h5 class="card-title">'.$dado['nome'].'</h5>';
          echo '<h6 class="card-subtitle mt-2 mb-4"><i class="fa-solid fa-dollar-sign"></i> '. number_format($dado['preco'], 2, ',', '.') . '</h6>';
          echo '<p class="card-text"><a href="carrinho.php?acao=add&id='.$dado['id'].'" class="btn btn-outline-primary"><i class="fa-regular fa-credit-card"></i> Reservar</a></p>';
        echo '</div>';
      echo '</div>';
    echo '</div>'; }?>
    </div>
       
    
  </div>
</div>


</body>
</html>










    
</body>
</html>