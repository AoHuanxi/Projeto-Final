<?php

include('conf/conecta.php');

$id = $_GET['id'];

$sql = "DELETE FROM feedbacks WHERE id = '$id'";

if(mysqli_query($conn,$sql)) {
    echo "<script>alert('Feedback Deletado!')</script>";
    header('location:exibirfeedback.php');
}
else {
    alert("Erro!");
}




?>
