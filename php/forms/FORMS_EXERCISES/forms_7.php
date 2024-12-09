<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = $_POST["min"];
        $seg = $_POST["seg"];
        $url = $_POST["video"];
        $q = strpos($url,"?");
        if($q == false){
            header('Location:'. $url.'?t='.(($min*60)+$seg));
        }else{
            header('Location:'. $url.'&t='.(($min*60)+$seg));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Document</title>
</head>
<body>
<?php include 'topmenu.php';?>
<div class="main-content">
    <form action="forms_7.php" method="post">
        <label for="video">Video</label>
        <input type="url" name="video" id="video"><br>
        <label for="min">Minuto</label>
        <input type="number" name="min" id="min"><br>
        <label for="seg">Segundos</label>
        <input type="number" name="seg" id="seg"><br>
        <input type="submit" value="submit">
    </form>
</div>
    
</body>
</html>