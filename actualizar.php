<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mesero</title>
    <link rel="shortcut icon" href="descarga.jpg">
</head>
<style>
  table {
   width: 100%;
   border: 1px solid #000;
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
   color: #fff;
    background: #000;
}
tr {
   background: #eee;
}
</style>

<body bgcolor="#f3dbc3">
 <form action="edit.php" method="post">
  
    <table>
      <caption>Opiniones</caption>
      <tr>
        <td>Te gusto la pagina</td>
        <td>clasificacion</td>
        <td>recomendacion</td>
        
      </tr>
<?php
include('conexi.php');
$id = $_GET["id"];
$sql="SELECT * FROM `usuario` WHERE id = '$id'";
$result=mysqli_query($con,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
 ?>

      <tr>
        <input type="hidden"value="<?php echo $mostrar['id'] ?>" name="id">
        <td><input type="text"value="<?php echo $mostrar['gusto'] ?>" name="gusto"></td>
        <td><input type="text"value="<?php echo $mostrar['calificacio'] ?>" name="calificacio"></td>
        <td><input type="text"value="<?php echo $mostrar['recomendacion'] ?>" name="recomendacion"></td>
      <?php } ?>
        <td><input type="submit" value="actualizar"></td>
    </table>
 </form>
</body>
</html>