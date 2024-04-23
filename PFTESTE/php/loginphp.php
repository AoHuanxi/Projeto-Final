<html>
    <body>
    <?php

session_start();

include('conf/conecta.php');

$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = "SELECT * FROM usuarios WHERE email LIKE '%$email%' AND senha LIKE AES_ENCRYPT('$senha', 'ASKASKSDJVS106DVSDJAHDLDSDFSBGXHG') ";
$result = mysqli_query($conn, $sql);

$_SESSION['email_logado'] = $email;

if (mysqli_num_rows($result) > 0){
    while ($tabela = mysqli_fetch_array($result)) { 
        if ($tabela['adm'] == '1'){
            header('Location: membrogremio.php');
            exit();
        }else{
            header('Location: aluno.php');
            exit();

        }
           }

}else{
    echo "<script>alert('Senha ou Email errado!'); window.location = 'login.php';</script> ";

   
}


?>
    </body>
</html>


