<?php session_start();
    
    if(isset($_SESSION['usuario'])){
        header('Location: PaginaPrincipal.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        
        $errores = '';
    
        if(empty($usuario) or empty($pass) or empty($pass2)){
            
            $errores .= '<li>Por favor rellena todos los datos</li>';
            
        }
        else{
            
            try{
                
                $conexion = new PDO('mysql:host=127.0.0.1;port=3307;dbname=usuarios','root','');
                
                
            }catch(PDOException $e){
                
                echo "Error: " . $e->getMessage();
                
            }
        
            $statement = $conexion->prepare('SELECT * FROM usuario Where usuario = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();
            
            if($resultado != false){
                
                $errores .= '<li>El nombre de usuario ya existe</li>';
                
            }
            
            $pass = hash('sha512', $pass);
            $pass2 = hash('sha512', $pass2);
            
            if($pass != $pass2){
                
                $errores .= '<li>Las contraseñas no son iguales</li>';
                
            }
            
        }
        
        if($errores == ''){
            
            $statement = $conexion->prepare('INSERT INTO usuario (id, usuario, pass) VALUES (null, :usuario, :pass)');
            $statement->execute(array(':usuario' => $usuario, 'pass' => $pass));
 
            header('Location: IniciarSesion.php');
            
        }
    
    }

    require 'Registrar.view.php';

?>