<?php 
			include('conexi.php');

       $id = $_GET['id'];
       $eliminar = "DELETE FROM usuario WHERE id = '$id'";
    
       $resultadoEliminar = mysqli_query($con,$eliminar);
    
       if ($resultadoEliminar){
        header("location: conta.php");
       }else {
        echo "<script>alert('No se pudo eliminar los datos, vuelva a intentarlo') </script>";
       }
       