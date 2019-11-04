

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>a.	Ejercicios básicos:</h1>
    <?php
    $nombre="Nestor Atahualpa Severino Florentino";
    $x=144;
    $y=999;
    $suma=$x+$y;
    $resta=$y-$x;
    $multiplicacion=$x*$y;
    $division=$y/$x;


   echo "<p>el valor de x es :</p>".$x;
   
   echo "<p>el valor de x es :</p>","".$y;

   echo "<p>La suma  de X + Y es :</p>".$suma;
   echo "<p>La Resta  de X - Y es :</p>".$resta;
   echo "<p>La Multiplicacion  de X * Y es :</p>".$multiplicacion;
   echo "<p>La Division  de X / Y es :</p>".$division;
    ?>
    <h1>Nombre Completo:</h1>
    <?php
    $nombre="<p>Nestor Atahualpa Severino Florentino</p>";
    echo "<p>Mi Nombre es:</p>".$nombre;
    ?>

<form action="index.php" method="post">
<h1>conversor de monedas</h1>
<label for="">cantidad en Moneda</label>
<input type="text" name="peseta" placeholder="Introduca la Cantidad">
<label for="">moneda</label>
<select name="moneda">
<option value=""></option>
<option value="us">US</option>
<option value="euro">Euro</option>
</select>
<input type="submit"value="calcular">
</form>

<?php

function convertir(){
    $peseta= $_POST['peseta'];
    $moneda= $_POST['moneda'];
    if ($moneda=='us'){
        $precio=52.5;
    }
    else{
        $precio= 60.5;
    }
$total= $peseta*$precio;
return array($peseta,$moneda,$total);
    }

?>
<h1>el total es:</h1>
<?php
$resultado=convertir();
echo "El total de "  .  " pesos en "  .  $resultado[1] . "  es " 
. round($resultado[2], 2);
?>



<?php

function convertirdato(){
    $datos= $_POST['datos'];
  
    if ($datos==''){
        return("introdusca un dato");
    }
    else{
        $datos;
    }

return ($datos);
    }

?>
<form action="index.php" method="post">
<h1>Dato Ingresado</h1>
<label for="">Ingrese un dato</label>
<input type="text" name="datos" placeholder="Introduca un dato"autofocus>

<input type="submit"value="mostrar datos">
</form>
<h1>El Dato Introducido es:</h1>
<?php
$datos=convertirdato();
echo "El dato introducido es :"  .  $datos ;
?>


<!--Funciones predefinidas:-->

<!--MUESTRA URL ACTUAL-->
<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
?>

<h1>URL ACTUAL:</h1>
<?php echo "http://" . $host . $url;?>

<!--MUESTRA IP ACTUAL-->
<h1>su direccion ip es:</h1>
<?php 
echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
?>
<!--MUESTRA EL NOMBRE DEL FICHERO ACTUAL-->
<h1>nombre del fichero: </h1>
<?php
// Imprime /home/usuario/public_html/application/unscript.php
echo __FILE__;
?>


</body>
</html>