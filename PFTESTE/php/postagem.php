<!doctype html>
<html lang="port">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/csspostagem.css" >

    <title>Postagens</title>
  </head>
  <body>
      <header class="sticky-top">
        <?php
        include("navbarAluno.php")
        ?>
      </header>

      <div class="container" style="max-width: 45vw;">
      <h1></h1>
      <h2></h2>
      <?php
                
              require("conf/conecta.php");

               
              $sql = "SELECT * FROM postagens ORDER BY id DESC" ;

              $result = $conn->query($sql) or die($conn->error);

              while($linha = $result->fetch_array()) 
              {
              ?>
              <br>
              <div class="card mb-5">
              <img src="<?php echo $linha['image'];?>" class="card-img-top" style="max-height: 50vh; max-width: 100%;" alt="Imagem do post">
              <div class="card-body">
                <h5 class="card-title"><?php echo $linha['titulo'];?></h5>
                <p class="card-text text-justify"><?php echo $linha['postagem'];?></p>
                <p class="card-text"><span class="text-muted small"><i class="fas fa-user"></i> Grêmio Estudantil - <i class="far fa-calendar"></i> <?php echo $linha['data'];?></span></p>
              </div>
              </div>
              <?php } ?>
  </body>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>