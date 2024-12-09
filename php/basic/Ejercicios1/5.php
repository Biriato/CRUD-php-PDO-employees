<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $d=17;
        $m=6;
        $a=2005;

        $dac = intval(date("d"));
        $mac = intval(date("m"));
        $yac = intval(date("Y"));

       $ydiff = $yac-$a;
    if(($dac<$d && $m==$mac)||$mac<$m){
        $ydiff = $ydiff-1;
    }
    echo $ydiff;

    ?>
    
</body>
</html>