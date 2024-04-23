<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include('navbarGremio.php');?>
    <div class="col-lg-8 mx-auto text-center mt-5">
      <h1 class="display-4">Visualizar Feedbacks</h1>
      <p class="lead mb-0">Escolha um filtro e acompanhe os feedbacks enviados pelos alunos!</p>
    </div>
    <div class="container w-100 mt-5 ">
        <center>
    <form method="POST" action="exibirfeedback.php">

        <select class="form-select w-50" name="problema" id="problema">
            <option selected>Escolha</option>
            <option value="todos">Mostrar todos</option>
            <option value="aulas">Em aulas</option>
            <option value="infraestrutura">Infraestrutura</option>
            <option value="refeitorio">No refeitório</option>
            <option value="outros">Outros</option>
        </select>

        <input type="submit" id="botao" value="Filtrar" class="btn-lg btn-primary mt-1 mb-5" required>
</center>

    </form>
    
<?php

include('conf/conecta.php');

$sql = "SELECT * FROM feedbacks";

if(!empty($_POST)) {

    $sql .= " WHERE (1=1) ";

    if(isset($_POST['problema'])) {

        if($_POST['problema'] == 'todos') {

            $sql = "SELECT * FROM feedbacks ORDER BY id DESC";
        
            $result = $conn->query($sql) or die($conn->error);
        
            while($dado = $result->fetch_array()) {
        
                $busca_nome = $dado["email"];
        
                $sql_user = "SELECT * FROM usuarios WHERE email = '$busca_nome'";
                $result2 = $conn->query($sql_user) or die($conn->error);
    
                while($dado2 = $result2->fetch_array()) { 
                    echo'<div class="container"><div class="card-group row justify-content-between">';
                        echo'<div class="col">';
                            echo'<div class="card mb-4">';
                            echo'<div class="card-body">';
                                echo'<h5 class="card-title">'.$dado["titulo"].'</h5>';
                                echo'<h6 class="card-subtitle">'.$dado["problema"].'</h6>';
                                echo'<p class="card-text">'.$dado["conteudo"].'
                                <br>Email de envio: '.$dado["email"].'
                                <br>Nome do Aluno: '.$dado2["nome"].' '.$dado2["sobrenome"].'
                                <br>Turma:'.$dado2["ano"].' de '.$dado2["curso"].'<br>';
                                echo date("d/m/Y", strtotime($dado["data"])) . " </br></p>";
                                echo'<a href="deletafeedback.php?id='.$dado["id"].'" class="btn btn-danger">Excluir</a>';
                            echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div></div>';
                }
            }
        }

        $problema = $_POST['problema'];
        $sql .= "AND problema = '$problema'";
        $sql .= "ORDER BY id DESC";

        $result = $conn->query($sql) or die($conn->error);

        while($dado = $result->fetch_array()) {

            $busca_nome = $dado["email"];

            $sql_user = "SELECT * FROM usuarios WHERE email = '$busca_nome'";
            $result2 = $conn->query($sql_user) or die($conn->error);

            while($dado2 = $result2->fetch_array()) {
                echo '<div class="container"><div class="card-group row justify-content-between">';   
                echo'<div class="col">';
                            echo'<div class="card mb-4">';
                            echo'<div class="card-body">';
                                echo'<h5 class="card-title">'.$dado["titulo"].'</h5>';
                                echo'<h6 class="card-subtitle">'.$dado["problema"].'</h6>';
                                echo'<p class="card-text">'.$dado["conteudo"].'
                                <br>Email de envio: '.$dado["email"].'
                                <br>Nome do Aluno: '.$dado2["nome"].' '.$dado2["sobrenome"].'
                                <br>Turma:'.$dado2["ano"].' de '.$dado2["curso"].'<br>';
                                echo date("d/m/Y", strtotime($dado["data"])) . " </br></p>";
                                echo'<a href="deletafeedback.php?id='.$dado["id"].'" class="btn btn-danger">Excluir</a>';
                            echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div></div>';
            }
        }
    }
}



?>
    </div>
    

</body>
</html>
