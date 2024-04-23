<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/publicar.css">
    <title>Publicar Postagem</title>
</head>

<header><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></header>

<?php  include('navbarGremio.php') ?>
<body>
<div class="container py-5">
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-3" >Formulário de Postagens</h1>
      <p class="lead mb-1 ">Preencha com todas as informações para que uma nova postagem seja feita no sistema!</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-lg p-5">
        <div class="tab-content">
          <div id="nav-tab-card" class="tab-pane fade show active">
            <form role="form" action="postagemphp.php" method="POST" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Insira um título" required>
              </div>
              <div class="form-group mb-3">
                <label for="postagem">Conteúdo:</label>
                <textarea name="postagem" id="postagem" class="form-control" placeholder="Insira o conteúdo da sua postagem" required></textarea>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="postagem">Imagem:</label>
                <input  accept="image/*" type="file" name="imagem" id="imagem" class="form-control" required>
                </div>
              </div>
              <button type="submit" value="Enviar" name="env" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">Publicar</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>

   <br>
<div class="container-fluid centralTabela">
             <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                    <th>ID</th>   
                    <th>Título</th>
                    <th>Postagem</th>
                    <th>Ações</th>

                </thead>
              <tbody>                      
                <?php
                 require("conf/conecta.php");

                $sql = "SELECT * FROM postagens ORDER BY id DESC";

                $result = $conn->query($sql) or die($conn->error);

                while($linha= $result->fetch_array()) 
                {
                   echo '<tr>';                  
                       echo  '<td>'.$linha['id'].'</td>';
                       echo  '<td>'.$linha['titulo'].'</td>';  
                       echo  '<td>'.$linha['postagem'].'</td>';  
                       echo  "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[id]'> Mostrar</button>&nbsp<button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#apagar$linha[id]'>Deletar</button>&nbsp</td>"; 
                                                           
                  echo "</tr>";
                  ?>
                  <div class="modal fade" id="myModal<?php echo $linha['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <center><h3 class="modal-title" id="myModalLabel">Post <?php echo $linha['titulo'];?></h3></center>
                        </div>
                        <div class="modal-body">
                            <h4><b>Imagem:</b><img src="<?php echo $linha['image'];?>" width="100%"height="20%"><br><br>
                         <b>Conteúdo:</b><?php echo $linha['postagem'];?><br><br>
                        <br><br>      
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="apagar<?php echo $linha['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel"> Notícia <?php echo $linha['id'];?></h3></center>
                        </div>
                        <div class="modal-footer">
                          <form action="deletarNoticia.php" method="post">
                            <input type="hidden" name="del_noticia" value="<?php echo $linha['id'];?>" readonly>
                            <input type="submit" class="btn btn-default" value="APAGAR">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                      <?php
                }
              mysqli_close($conn);
              ?>
            </tbody>
          </table>
          </div>
          <?php include('jquery.php');?>  
 </div>  



           

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


</body>
</html>
