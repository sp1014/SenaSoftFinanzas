<?php  
 $hostBD = "localhost";  
 $userBD = "root";  
 $passBD = "";  
 $dataBD = "test";  
 $message = ""; 
 
 try  
 {   
      $connect = new PDO("mysql:host=$hostBD; dbname=$dataBD", $userBD, $passBD);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["usuario"]) || empty($_POST["password"]))  
           {  
                $message = '<label>Todos los campos son requeridos</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM Usuario WHERE Usuario = :usuario AND Password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'Usuario'     =>     $_POST["usuario"],  
                          'Password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["usuario"] = $_POST["usuario"];  
                  
                     header("location: ../APP/index.php");  
                }  
                else  
                {  
                     $message = '<label>Datos incorrectos</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  

 ?>