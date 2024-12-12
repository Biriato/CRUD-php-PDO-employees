<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio1.php" method="post">
Marca:<input type="text" name="marca" id="marca"><br>
Modelo: <input type="text" name="modelo" id="modelo"><br>
Año fabricacion:<input type="number" name="fecha" id="fecha" min="1900" max="2024"><br>
Kilometraje:<input type="number" name="kilo" id="kilo"><br>
<input type="submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        $marca = $_POST["marca"];
        if($marca != null){
            if (!preg_match("/^[a-zA-Z\s]+$/",$marca)) {
                echo "No es una marca valida";
               return;
            }
        }else{
            echo "Es necesario cubrir el campo marca";
            return;
        }
        $modelo = $_POST["modelo"];
        if($modelo != null){
            if(strlen($modelo)<2){
                echo "No es un modelo valido";
                return;
            }
        }else{
            echo "Es necesario cubrir el campo modelo";
            return;
        }
       
        $fecha = $_POST["fecha"];
        $ac = intval(date("Y"));
        $k = $_POST["kilo"];
    if($fecha!=null && $k != null){
        $años = $ac - $fecha;
        echo $k/$años . " kilometros de media por año";
    }else{
        echo "Enhorabuena tienes un $marca modelo $modelo";
    }

    }




?>
</body>
</html>