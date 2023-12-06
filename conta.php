<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="shortcut icon" href="descarga.jpg">
</head>
<style>
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

</style>

<body bgcolor="#000000">
  <div 
    class="jagr"> <h1><center></center></h1>
  </div>
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
       <fieldset>
          <legend><h1>Opiniones:</h1></legend>
          <label>

          <tr>
            <td width="100%"  height="100%">¿Te gustó la pagina?</td>
            <td width="200%">

          SI&nbsp;
            <input type="radio" name="gusto" value="si">
            NO&nbsp;
            <input type="radio" name="gusto" value="no">
            </td>
        </tr> <!--
           <h2>Te gusto la pagina:</h2>
           <input type="text"  name="gusto" placeholder="Gusto" required="Gusto"  required maxlength="Gusto"><br><br><br><br> -->
         </label>

         <label>
            <h2>Pon del 1 al 10 de cuánto te gustó:</h2>
            <input type="text" name="calificacio" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="calificación" required="10"><br><br><br><br>
          </label>

         
          <label>
            <h2>¿Qué nos recomiendas mejorar?</h2>
            <input type="text" name="recomendacion" placeholder="Recomendación" required="Recomendacion"><br><br><br><br>
          </label>
       </fieldset>    
       <fieldset>
     <input class="boton_2" type="submit" name="Enviar" value="Listo"><br><br>
     <a class="boton_2" href="menu.html">Menú</a>
     <a class="boton_2" href="sesion.php">Salir</a>
    </fieldset>
 
    
<fieldset>
<a href="https://mail.google.com/mail/u/0/#chat/space/AAAAN-WgWzM"> contáctanos</a>
</fieldset>

    <?php 
			include('conexi.php');
			?>
   </form> 

  

    <table>
      <caption>Datos</caption>
      <tr>
        <td>id</td>
        <td>Te gusto la pagina:</td>
        <td>claificacion</td>
        <td>recomendaciones</td>
      </tr>
<?php
$sql="SELECT * FROM `usuario`";
$result=mysqli_query($con,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
 ?>

      <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['gusto'] ?></td>
        <td><?php echo $mostrar['calificacio'] ?></td>
        <td><?php echo $mostrar['recomendacion'] ?></td>
        <td><div class="table--item">
            <a href="actualizar.php?id=<?php echo $mostrar['id']?>" >Editar</a>
            <a href="eliminar.php?id=<?php echo $mostrar['id']?>" class="table--item--link">Eliminar</a>
        </div></td>
      </tr>
      <?php } ?>
    </table>
</body>
</html>