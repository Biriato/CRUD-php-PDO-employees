<html>
<body>

Welcome <?php echo $_POST["namep"]; ?><br>
You born in: <?php echo "$_POST[d]/$_POST[m]/$_POST[y]" ?><br>
Your age is :
<?php
    $dac = intval(date("d"));
    $mac = intval(date("m"));
    $yac = intval(date("Y"));
    $ydiff = $yac-$_POST["y"];
    if(($dac<$_POST["d"] && $_POST["m"]==$mac)||$mac<$_POST["m"]){
        $ydiff = $ydiff-1;
    }
    echo $ydiff;
?>
</body>
</html>