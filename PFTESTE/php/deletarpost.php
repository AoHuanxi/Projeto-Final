<?php
    $id=$_POST['del_post'];
 
    include("conf/conecta.php");


    
       $result="delete from postagens where id='$id'";

    if(mysqli_query($conn, $result)){
            
            header("Location:publicar.php");
        }
        else{
            
            die("Não foi possível realizar a alteração".mysqli_error());
        }
mysqli_close($conn);