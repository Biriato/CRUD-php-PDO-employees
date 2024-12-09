<!DOCTYPE html>
<html>
<body>


<?php
$name = "Alejandro";
$age = 25;

echo "<h1>Hello I'm $name and I'm $age years old</h1>";
?> 
<?php
$string = "Hola Buenas";
$letras = str_split($string);
$cont =0;
    foreach($letras as $x){
        if($x == "A" || $x == "E" ||$x =="I" ||$x == "O" ||$x =="U" ||$x == "a" ||$x =="e" || 
        $x == "i" ||$x == "o" ||$x == "u"){
            $cont++;
        }
    }
    echo "El numero de vocales en $string es $cont";
?>
</body>
</html>
