<?php
include("cn.php");
	if ($con) {
		echo "todo correcto";
	}

if(isset($_POST['Enviar'])){
	if (strlen($_POST['gusto']) >= 1 &&
		strlen($_POST['calificacio']) >= 1 &&
		strlen($_POST['recomendacion']) >= 1 ) {		
		$US=trim($_POST['gusto']);
		$COR=trim($_POST['calificacio']);
		$COt=trim($_POST['recomendacion']);
		$CONSULTA="INSERT INTO `usuario` (`gusto`, `calificacio`, `recomendacion` ) VALUES ('$US','$COR','$COt')";
		$resultado=mysqli_query($con,$CONSULTA);
		if ($resultado) {
		//echo "ENLAZADO";	
		}
	}
}



?>