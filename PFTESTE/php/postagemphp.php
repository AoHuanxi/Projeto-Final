
<?php

include("conf/conecta.php");

 
if(!empty($_POST)) {

    
$titulo = $_POST['titulo'];
$postagem = $_POST['postagem'];

$image_file = $_FILES["imagem"];

if (filesize($image_file["tmp_name"]) <= 0) {
    die('Uploaded vazio!.');
}

$image_type = exif_imagetype($image_file["tmp_name"]);
if (!$image_type) {
    die('Uploaded não é uma imagem.');
}

$image_extension = image_type_to_extension($image_type, true);

$image_name = bin2hex(random_bytes(16)) . $image_extension;

move_uploaded_file(

    $image_file["tmp_name"],

    __DIR__ . "/uploads/" . $image_name
);
$image_pasta= "uploads/" . $image_name;
$sql = "INSERT INTO postagens (titulo, postagem, data, image) VALUES ('$titulo','$postagem',NOW(), '$image_pasta')";

if (mysqli_query($conn, $sql)){
header("location:publicar.php");
   echo '<script>alert("Postagem enviada!")</script>';
   
}
else{
    echo "ERRO";
}

mysqli_close($conn);
}
?>

