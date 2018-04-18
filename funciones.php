<?php 

    function comprobar_session(){
        
        if(isset($_SESSION['usuario'])){
        header('Location: PaginaPrincipal.php');
        }
        
    }

?>