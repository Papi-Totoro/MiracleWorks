<?php session_start();

    if(isset($_SESSION['usuario'])){
        header('Location: PaginaPrincipal.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass = hash('sha512',$pass);
        
        $errores = '';
        
        try{
            
            $conexion = new PDO('mysql:host=127.0.0.1;port=3307;dbname=usuarios','root','');
            
        }catch(PDOException $e){
            
            echo "Error: " . $e->getMessage();
            
        }
        
        $statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario = :usuario AND pass = :pass');
        $statement->execute(array(':usuario' => $usuario,'pass' => $pass));
        $resultado = $statement->fetch();
        
        if($resultado != false){
            
            $_SESSION['usuario'] = $usuario;
            header('Locarion: PaginaPrincipal.php');
            
        }else{
            
            $errores .= '<li>Datos incorrectos</li>';
            
        }
        
    }

    require 'IniciarSesion.view.php';
        
?>