<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text1 = "Hola";
    $text2 = "Hola hola";
    $text3 = "Hola hola hola";
    $t1n = strlen($text1);
    $t2n = strlen($text2);
    $t3n = strlen($text3);
    $order = array($t1n,$t2n,$t3n);
    rsort($order);
    for ($i=0; $i < 3; $i++) { 
        if(strlen($text1)==$order[$i]){
            echo"$i : $text1  with : $order[$i]";
        }elseif (strlen($text2)==$order[$i]) {
            echo"$i : $text2  with : $order[$i]";
        }else{
            echo"$i : $text3  with : $order[$i]";
        }
    }
    ?>
</body>
</html>