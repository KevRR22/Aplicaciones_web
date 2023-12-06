<?php
               
               include("cn_bdf.php");
               if ($con) {
                echo "todo correcto";
            }

               if (isset($_POST['Enviar'])){
                    if (strlen($_POST['seccion1']) >= 1 && strlen($_POST['seccion2']) >= 1 && strlen($_POST['seccion3']) >= 1  
                    && strlen($_POST['seccion4']) >= 1  && strlen($_POST['seccion5']) >= 1   && strlen($_POST['seccion6']) >= 1              )
                    {
                        $pregun1 = trim($_POST['seccion1']);
                        $pregun2 = trim($_POST['seccion2']);
                        $pregun3 = trim($_POST['seccion3']);
                        $pregun4 = trim($_POST['seccion4']);
                        $pregun5 = trim($_POST['seccion5']);
                        $pregun6 = trim($_POST['seccion6']);

                       
                        $consulta = "INSERT INTO `usuari`(`seccion1`, `seccion2`, `seccion3`, `seccion4`, `seccion5`, `seccion6`)
                         VALUES ('$pregun1','$pregun2', '$pregun3' ,'$pregun4' ,'$pregun5' ,'$pregun6')";
                        $resultado = mysqli_query($con,$consulta);
                    if ($resultado) { 
            header("location: Menu.html");   
           
           
        } else {
          
           	echo"<div class='alert alert-danger' >ACCESO DENEGADO</div>";
          
        }
    } } 
     ?>