<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="shortcut icon" href="descarga.jpg">
    <link rel="stylesheet" href="estilos03.css">
    <link rel="stylesheet" href="estilos01.css">
    <link rel="stylesheet" href="part2.css">
</head>
<!-- <style>
  table {
   width: 100%;
   border: 1px solid  rgb(234, 147, 41);
}
tr, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}

caption {
   padding: 0.3em;
   color: #000 ;
    background:  #fff;
}
tr {
   background: #eee;
}
  .boton_2{
	  text-decoration: none;
	  padding: 3px;
	  padding-left: 100px;
	  padding-right: 100px;
	  font-family: Times New Roman;
	  font-weight: 300;
	  font-size: 25px;
	  font-style: italic;
	  color: rgb(234, 147, 41) ;
	  background-color: #fff;
	  border-radius: 15px;
	  border: 3px double #000000 ;
	}
	.boton_1:hover{
	  opacity: 0.6;
	  text-decoration: none;
	}
  .jagr
 {
   font-size: 30px;
   color: rgb(17, 82, 55);
   font-weight: bold;
   text-shadow: 1px  5px 0px rgb(199, 194, 205),
               0px  1px 0px rgb(199, 194, 205),
              -1px  0px 0px rgb(199, 194, 205),
               0px -1px 0px rgb(199, 194, 205);
  }
 label 
  {
     display: inline-block;
     float: left;
     clear: left;
     width: 90px;
     margin: 5px;
     text-align: left;
     font-family:Georgia, 'Times New Roman', Times, serif ;
     color: rgb(255, 255, 255);
  }
 
 input[type="text"] 
  {
     width: 250px;
     margin: 5px 0px;
  }
 form fieldset
  {
     float: left;
     width: 45%;
     background-color:  rgb(234, 147, 41);
     margin: 0 5px;
  }
    legend 
  {
    background-color: rgb(255, 255, 255);
    font-family:Georgia, 'Times New Roman', Times, serif ;
    color: rgb(234, 147, 41);
  }
  fieldset
  { float: right;
    width: 30%; 
    background-color:  rgb(234, 147, 41);
  }

</style> -->

<body >
 
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"  >
     <!-- <fieldset>
       <legend>
          <h1>Informacion personal</h1>
        </legend>
        <label>
          <h2>NOMBRE:</h2>
          <input type="text" name="nombre"  placeholder="NOMBRE" required="NOMBRE" 
          autocomplete="NOMBRE"  minlength="1" maxlength="50" required onkeypress="
          return (event.charCode == 32) ||  ((event.charCode >= 65 && event.charCode <= 90) 
          || (event.charCode >= 97 && event.charCode <= 122))" required=""><br><br>
         <br><br><br><br>
        </label>
        <label>
         <h2>Apellidos:</h2>
          <input type="text" name="apellidos"  placeholder="APELLIDOS" required="APELLIDOS" 
          autocomplete="apellidos"  minlength="1" maxlength="50" required onkeypress="
          return (event.charCode == 32) ||  ((event.charCode >= 65 && event.charCode <= 90) 
          || (event.charCode >= 97 && event.charCode <= 122))" required=""><br><br>
        </label>
      </fieldset>
-->
       
          <legend><h1>Examen:</h1></legend>

<br><br><fieldset>
          <label>

          <tr>
            <td width="100%"  height="100%">¿1. Qué es una aplicacion web?</td>
            <td width="200%">

            Es una recopilación organizada de información o datos estructurados.&nbsp;
            <input type="radio" name="seccion1" value="no">
            El almacenamiento en la nube&nbsp;
            <input type="radio" name="seccion1" value="si">
           
            Un software que se ejecuta en el navegador web.&nbsp;
            <input type="radio" name="seccion1" value="no">
        
            Un pdf&nbsp;
            <input type="radio" name="seccion1" value="no">
        
        
        </td>
        </tr> <!--
           <h2>Te gusto la pagina:</h2>
           <input type="text"  name="gusto" placeholder="Gusto" required="Gusto"  required maxlength="Gusto"><br><br><br><br> -->
         </label>


<br><br><br>
         <label>

<tr>
  <td width="100%"  height="100%">2.¿Para qué sirve una aplicacion web?</td>
  <td width="200%">

  Para recopilar y organizar información.&nbsp;
  <input type="radio" name="seccion2" value="no">
  La posibilidad de enlazar a través de hipervículos diferentes.&nbsp;
  <input type="radio" name="seccion2" value="no">
 
  Es un programa informático diseñado como una herramienta para realizar operaciones o funciones específicas.&nbsp;
  <input type="radio" name="seccion2" value="si">

  Crear una comunidad o impulsar una causa, interactuar, capacitar o educar, ofrecer soporte o atención, o divertirse.&nbsp;
  <input type="radio" name="seccion2" value="no">


</td>
</tr>
</label>

<br><br>
<label>

<tr>
  <td width="100%"  height="100%">3. ¿Cuál de las siguientes respuestas no es una desventaja de aplicacion web?</td>
  <td width="200%">

  Limitaciones de funcionalidad.&nbsp;
  <input type="radio" name="seccion3" value="no">
  Delincuencia digital.&nbsp;
  <input type="radio" name="seccion3" value="si">
 
  Privacidad y seguridad..&nbsp;
  <input type="radio" name="seccion3" value="no">

  Dependencia de la conexión a Internet.&nbsp;
  <input type="radio" name="seccion3" value="no">


</td>
</tr>
</label>

<br><br>
<label>

<tr>
  <td width="100%"  height="100%">4.¿Cuál de las siguientes respuestas no es una ventaja de aplicacion web?</td>
  <td width="200%">

  Mejorar la imagen de la marca.&nbsp;
  <input type="radio" name="seccion4" value="si">
  Accesibilidad.&nbsp;
  <input type="radio" name="seccion4" value="no">
 
  Colaboración.&nbsp;
  <input type="radio" name="seccion4" value="no">

  No requieren instalación.&nbsp;
  <input type="radio" name="seccion4" value="no">


</td>
</tr>
</label>

<br><br>      
<label>

<tr>
  <td width="100%"  height="100%">5.¿Cuál de las siguientes respuestas es una carracterística de una aplicacion web?</td>
  <td width="200%">

  Adaptación a dispositivos (Responsive). &nbsp;
  <input type="radio" name="seccion5" value="no">
  Fácil navegación.&nbsp;
  <input type="radio" name="seccion5" value="no">
 
  Datos online .&nbsp;
  <input type="radio" name="seccion5" value="si">

  Un buen diseño visual.&nbsp;
  <input type="radio" name="seccion5" value="no">


</td>
</tr>
</label>

<br><br>
<label>

<tr>
  <td width="100%"  height="100%">6.¿Cuál de los siguientes lenguajes no se mencionan en la presentacion? </td>
  <td width="200%">

  css. &nbsp;
  <input type="radio" name="seccion6" value="si">
  PHP.&nbsp;
  <input type="radio" name="seccion6" value="no">
 
  JavaScript.&nbsp;
  <input type="radio" name="seccion6" value="no">

  C++.&nbsp;
  <input type="radio" name="seccion6" value="no">


</td>
</tr>
</label>
</fieldset>
<br><br>
       <fieldset>
     <input class="ov-btn-grow-spin" type="submit" name="Enviar" value="Listo"><br><br>
     <a class="ov-btn-grow-spin" href="Menu.html">Menú</a>
     <a class="ov-btn-grow-spin" href="sesion.php">Salir</a>
    </fieldset>
 
<fieldset>
<a class="ov-btn-grow-spin" href="https://mail.google.com/mail/u/0/#chat/space/AAAAN-WgWzM"> contáctanos</a>
</fieldset>

    <?php 
			include('guardar.php');
			?>
   </form> 

  

    
</body>
</html>