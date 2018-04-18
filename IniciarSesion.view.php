<!doctype html>
<html lang="en">
    
    <head>
        
        <title>"ShareBooks"</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/W3.css">   
              
    </head>
    
    <body>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        
        <table class="w3-table-blue w3-middle">

                <tr>
                
                    <td>
                        Correo:
                    </td>
                    <td>
                        <input type="text" name="usuario">
                    </td>
                    
                </tr>
                
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
                        
                    </td>
                    <td>
                        <button class="w3-button" onclick="login.submit()">Inisiar Sesion</button>
                    </td>
                    
                </tr>
            
                <tr>
                
                    <td>
                        
                    </td>
                    <td>
                        <a href="Registrar.php">Registrate</a>
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