<?php
    include("conf/conecta.php");

?>


<a href="navbar.php">Voltar</a>


<h3>Listagem de Reservas</h3>
<table>
    <thead>
        <tr>
            <td>Blusa:</td>
            <td>Tamanho Blusa:</td>
            <td>Quantidade Blusa:</td>
            <td>Jaleco:</td>
            <td>Tamanho Jaleco:</td>
            <td>Quantidade Jaleco:</td>
        </tr>
    </thead>
    <tbody>
        <?php

        $sql = "SELECT * FROM uni LIMIT 200";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0):
            while ($lista = mysqli_fetch_array($result)):
        ?>

        <tr>
            <td><?php echo $lista['blusa']; ?></td>
            <td><?php echo $lista['tamanho_b']; ?></td>
            <td><?php echo $lista['quantidade_b']; ?></td>
            <td><?php echo $lista['jaleco']; ?><td>
            <td><?php echo $lista['tamanho_j']; ?></td>
            <td><?php echo $lista['quantidade_j']; ?></td>

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
