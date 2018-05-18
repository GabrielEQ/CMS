<?php
    
    $host = 'localhost';
    $user = 'root';
    $pass = 'fiap';
    $db_name = 'cms';  

    $connection = mysqli_connect($host, $user, $pass, $db_name);

    if(!$connection){
        die('Não conectou');
    } 

?>