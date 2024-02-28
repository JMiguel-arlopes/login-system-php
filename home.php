<?php 
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("location: index.php");
        exit;
    }

?>


<h1>BEM VINDOOOOOO!!</h1>
<a href="">Voltar para Login</a>