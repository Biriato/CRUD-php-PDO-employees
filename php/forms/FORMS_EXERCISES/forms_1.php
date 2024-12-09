
<head>
    <link rel="stylesheet" href="menu.css">
</head>
<?php include 'topmenu.php';?>
<div class="main-content">
<?php
 $acum=0;
 for ($x = 1; $x <= 100; $x++) {//When $acum>=800 $x=96 and when $x=99 $acum=880
 if ($x<10)
 $acum *= $x;
 else if ($x % 3==0)
 $acum -= 25;
 else
 $acum = $acum + ($x++);
 }
 echo 'When $acum>=800 $x=96 and when $x=99 $acum=880';
?>
</div>