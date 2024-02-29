<?php 
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("location: index.php");
        exit;
    }

?>


<h1>BEM VINDOOOOOO!!</h1>
<br>
<a href="exit.php">Voltar para Login</a>