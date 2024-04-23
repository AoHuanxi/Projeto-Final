
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<header><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></header>
<?php  include('navbarAluno.php') ?>
<?php

session_start();
include('conf/conecta.php');

if(!empty($_POST)) {

    $titulo = $_POST['titulo'];
    $problema = $_POST['problema'];
    $conteudo = $_POST['conteudo'];
    $email = $_SESSION['email_logado'];


    $sql = "INSERT INTO feedbacks (titulo, problema, conteudo, email, data) VALUES ('$titulo','$problema','$conteudo','$email',NOW())";


    if (mysqli_query($conn, $sql)){
    echo '<div class="alert alert-success" class="mt-5 w-25" role="alert">
    Feedback enviado com sucesso!</div>';
    }
    else{
        echo "ERRO";
    }

    mysqli_close($conn);

}
?>
<body>

<div class="container py-5">
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4">Formulário de Feedback</h1>
      <p class="lead mb-0">Preencha com todas as informações para enviar um feedback ao sistema!</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-lg p-5">
        <div class="tab-content">
          <div id="nav-tab-card" class="tab-pane fade show active">
            <form role="form" action="formfeedback.php" method="post" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" class="form-control" required placeholder="Insira um título">
              </div>
              <div class="form-group mb-3">
                <label for="problema">Categoria do Feedback:</label>
                <br>
                <select name="problema" id="problema" class="form-control">
                    <option value="todos" selected>Mostrar todos</option>
                    <option value="aulas">Em aulas</option>
                    <option value="infraestrutura">Infraestrutura</option>
                    <option value="refeitorio">No refeitório</option>
                    <option value="outros">Outros</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="postagem">Conteúdo:</label>
                <textarea id="conteudo" name="conteudo" class="form-control" rows="5" cols="33"></textarea>
                </div>
              </div>
              <button type="submit" value="Enviar" name="env" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">Enviar Feedback</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>


   <br>
   <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


</body>
</html>