<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('Location: PaginaPrincipal.view.php');
    }
    else{
        header('Location: Registrar.php');
    }
    
    require 'PaginaPrincipal.view.php';

?>