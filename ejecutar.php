<!DOCTYPE html>
<html lang="en">
<head><title>CALCULO DEL AREA DE UN OCTAGONO REGULAR</title></head>
<body>
<?php

if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

    $longitud = $_POST['longitud'];
    
    
    if(!empty($longitud)) {
        if(is_numeric($longitud)) {
        echo "<h2 align='center'>CALCULO DEL AREA DEL
        RECTANGULO</h2>";
        $PERIMETRO = $longitud * 8;
        $alfa = 0.785398163;
        $ta= $alfa / 2 ;  
        $apotema = $longitud /( 2 * tan(($ta)));
        $area = ($PERIMETRO * $apotema)/2;
        echo "<br/><br/>";
        echo "<br>Perimetro : " . $PERIMETRO;
        echo "<br>Apotema : " . $apotema;
        echo "<br/>";
        echo "<br>Area: " . $area;
        echo "<br/><br/><br/>";
        echo "<a href='index.html'>Regresar</a>";
        }else{
        echo "El valor debe de ser
        numérico";
        echo "<a href='index.html'>Regresar</a>";
        }
        }else{
        echo "El valor no debe de estar
        vacío";
        echo "<a href='datos.html'>Regresar</a>";
        }
        }