<?php
    include("conf/loginbd.php");
    include("conf/conecta.php");

?>

<h3>Listagem de Alunos Cadastrados</h3>
<table>
    <thead>
        <tr>
            <td>Nome:</td>
            <td>Sobrenome:</td>
            <td>Email Institucional:</td>
            <td>Curso:</td>
            <td>Ano:</td>
            <td>Senha:</td>
            <td>Adm:</td>
        </tr>
    </thead>
    <tbody>
        <?php

        $sql = "SELECT * FROM usuarios LIMIT 200";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0):
            while ($lista = mysqli_fetch_array($result)):
        ?>

        <tr>
            <td><?php echo $lista['nome']; ?></td>
            <td><?php echo $lista['sobrenome']; ?><td>
            <td><?php echo $lista['email']; ?></td>
            <td><?php echo $lista['curso']; ?></td>
            <td><?php echo $lista['ano']; ?><td>
            <td><?php echo $lista['senha']; ?><td>
            <td><?php echo $lista['adm']; ?><td>

           
        </tr>
        <?php
            endwhile;
        else:

        ?>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>

        <?php

        endif;

        ?>
    </tbody>
</table>
<br>

