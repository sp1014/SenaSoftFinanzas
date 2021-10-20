<?php  
 session_start();  
include("Prueba.php");
 
 ?>  
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">



<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
  <div class="row">
    <div class="col-12 col-md-6"> 
           <br />  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>           
                <form method="post">  
                <div class="form-group">
    <label for="Usuario">Usuario</label>
    <input type="text" name="usuario" class="form-control" placeholder="Ingrese usuario" />  
				</div>
  
                     <div class="form-group">
    <label for="Contraseña">Contraseña</label>
     <input type="password" name="password" class="form-control" placeholder="Ingrese Contraseña" />  
				</div>
                      
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Iniciar Sesion" />  
                </form>  
            
      
    </div>
  </div>

  
</div>


<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 

</body>
</html>