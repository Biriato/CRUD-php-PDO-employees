<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $classroom = array("Alejandro" =>5,"Pepe"=>3,"Jose"=>10,"Maria" =>6);
        $AMark = 0;
        $Max_Mark = 0;
        $N_failed = 0;
        echo"Sorted by name<br>";
        /** Ordena las claves de manera alfabetica */
        uksort($classroom,function($a,$b){ return strcasecmp($a,$b);});
        foreach ($classroom as $key => $value) {
            echo "$key:$value<br>";
            $AMark  = $value+$AMark;
            if($value>$Max_Mark){
                $Max_Mark = $value;
            }
            if($value<5){
                $N_failed++;
            }
        }
        echo"Sorted by mark<br>";
        /** Ordena los datos por numero de manera descendiente */
        uasort($classroom,function($a,$b){return $b-$a;});
        foreach ($classroom as $key => $value) {
            echo "$key:$value<br>";
        }
        echo"<br>";
        $AMark = $AMark/count($classroom);
        echo "La media es:$AMark<br>La nota maxima es:$Max_Mark<br>El numero de suspensos es:$N_failed";
    
    ?>
</body>
</html>