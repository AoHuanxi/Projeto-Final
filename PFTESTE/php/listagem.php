<?php
    include("conf/loginbd.php");
    include("conf/conecta.php");
    include("navbarGremio.php")

?>
<body>
  <div class="container-fluid w-75">
  <div class="col-lg-8 mx-auto text-center mt-5">
      <h1 class="display-4">Listagem de Alunos</h1>
      <p class="lead mb-3">Confira todos os usuários cadastrados no sistema!</p>
  </div>
  <div class="container-fluid centralTabela">
             <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                    <th>Nome:</th>   
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Curso:</th>
                    <th>Ano:</th>
                    <th>Ações</th>

                </thead>
              <tbody>                      
                <?php

                $sql = "SELECT * FROM usuarios ORDER BY nome ASC";

                $result = $conn->query($sql) or die($conn->error);

                while($linha= $result->fetch_array()) 
                {
                   echo "<tr>";                  
                       echo  '<td>'.$linha['nome'].'</td>';
                       echo  '<td>'.$linha['sobrenome'].'</td>';  
                       echo  '<td>'.$linha['email'].'</td>';  
                       echo  '<td>'.$linha['curso'].'</td>';  
                       echo  '<td>'.$linha['ano'].'</td>';  
                       
                                                           
                  echo "</tr>";
                  ?>
                
                      <?php
                }
              mysqli_close($conn);
              ?>
            </tbody>
          </table>
          </div>
          <?php include('jquery.php');?>  
            </div>