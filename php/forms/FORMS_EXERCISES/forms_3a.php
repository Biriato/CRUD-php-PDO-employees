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
    <form action="forms_3.php" method="post">
        Altura: <input type="text" name="altura" id="altura"><br>
        Peso: <input type="text" name="peso" id="peso"><br>
        Genero:<br> 
        <label for="hombre">Hombre</label>
        <input type="radio" name="genero" id="hombre" value="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="genero" id="mujer" value="mujer"><br>
        <input type="submit">
    </form>
    </div>
</body>
</html>