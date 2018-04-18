<!doctype html>
<html lang="en">
    
    <head>
        
        <title>"ShareBooks"</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/W3.css">
              
    </head>
    
    <body>
        
        <h1>Registrarse</h1>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" name="login">
            
            <table class="w3-table-blue w3-middle">

                <!--
                <tr>
                
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="email">
                    </td>
                    
                </tr>
                -->    
            
                <tr>
                
                    <td>
                        Nombre(s):
                    </td>
                    <td>
                        <input type="text" name="usuario">
                    </td>
                    
                </tr>
                
                <!--
                <tr>
                
                    <td>
                        Apellido paterno:
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                        Apellido materno:
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    
                </tr>
                -->
                
                <tr>
                
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="pass">
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                        Porfavor introduce denuevo la contraseña:
                    </td>
                    <td>
                        <input type="password" name="pass2">
                    </td>
                    
                </tr>
                
                 <!--
                <tr>
                
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                        Edad:
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                        Escoje una pregunta de seguridad:
                    </td>
                    <td>
                        <select class="w3-select" name="option">
                            <option value="1" selected>¿Nombre de tu primera mascota?</option>
                            <option value="2" >¿Cual es el codigo postal de tus padres?</option>
                            <option value="3" >¿Nombre de tu primer novio o novia?</option>
                        </select>
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                        Respuesta:
                    </td>
                    <td>
                        <input type="password">
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                       Respuesta otra vez: 
                    </td>
                    <td>
                        <input type="password">
                    </td>
                    
                </tr>
                -->
                
                <tr>
                
                    <td>
                        
                    </td>
                    <td>
                        <button class="w3-button" onclick="login.submit()">Registrarse</button>
                    </td>
                    
                </tr>
                
                <tr>
                
                    <td>
                        
                    </td>
                    <td>
                        <a href="IniciarSesion.php">Iniciar Sesion</a>
                    </td>
                    
                </tr>
                
                <?php if(!empty($errores)): ?>
                
                <tr>
                
                    <td>
                        
                    </td>
                    <td>
                        
                        <?php echo $errores; ?>
                        
                    </td>
                    
                </tr>
            
                <?php endif; ?>
                
            </table>
            
        </form>
        
    </body>

</html>