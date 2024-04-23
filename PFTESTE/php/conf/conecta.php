<?php

    define('server', 'localhost'); 
    define('user', 'root');
    define('pass', '');
    define('database', 'testepf');
       
    $conn = mysqli_connect(server, user, pass, database);

    if (mysqli_connect_error())
    {
        printf('Falha na conexão: %s\n', mysqli_connect_error());
        exit(); // die();
    }
    
?>