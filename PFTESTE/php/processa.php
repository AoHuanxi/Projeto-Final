<?php


    include("conf/conecta.php");

    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $ano = $_POST['ano'];
    $senha = $_POST['senha'];
    
    $sql  = "INSERT INTO usuarios (nome, sobrenome, email, curso, ano, senha, adm) VALUES ('$nome','$sobrenome','$email','$curso','$ano', AES_ENCRYPT('$senha', 'ASKASKSDJVS106DVSDJAHDLDSDFSBGXHG'), 0)";

    if (mysqli_query($conn, $sql)){
       header('location:login.php');
    }
    else {
        echo 'erro!';
    }

    mysqli_close($conn);
?>

