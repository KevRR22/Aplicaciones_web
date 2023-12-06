<?php 
			include('conexi.php');

        $id=trim($_POST['id']);
        $US=trim($_POST['gusto']);
		$COR=trim($_POST['calificacio']);
		$COt=trim($_POST['recomendacion']);
        //actualizar datos
        $actualizar = "UPDATE `usuario` SET gusto='$US', calificacio='$COR', recomendacion='$COt'
         WHERE id='$id'";

        $resultado=mysqli_query($con,$actualizar);
        if ($resultado){
            echo "<script>alert('tus datos se modificaron correctamente'); window.location='conta.php';</script>";
        } else {
            echo"<script> alert('no se pudo');</script>";
        }