<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 5;
        $factorial = 1;

        for ($i=$num;$i>0;$i--) { 
           $factorial=($i*$factorial);
        }
        echo $factorial;
        $factorial = 1;
    ?>
    <?php
        $a=$num;
        while ($a >0) {
            $factorial = $a * $factorial;
            $a--;
        }
        echo $factorial;
        $factorial = 1;
    ?>
    <?php
        $a = $num;
        do {
            $factorial = $a*$factorial;
            $a--;
        } while ($a>0);
        echo $factorial;
    ?>
</body>
</html>