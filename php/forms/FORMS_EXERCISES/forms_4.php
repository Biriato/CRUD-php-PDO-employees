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
    <form action="forms_4.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required><br>
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname"><br>
        <label for="passport">DNI</label>
        <input type="text" name="passport" id="passport" required><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" min="18" max="150"><br>
        <label for="hombre">Man</label>
        <input type="radio" name="genero" id="hombre" value="hombre">
        <label for="mujer">Woman</label>
        <input type="radio" name="genero" id="mujer" value="mujer"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <input type="submit">
    </form>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z\s]+$/",$name)) {
            echo "Is not a valid name";
           return;
        }
        $surname = $_POST["surname"];
        if (!preg_match("/^[a-zA-Z\s]+$/",$surname)) {
            echo "Is not a valid surname";
           return;
        }


        $passport = $_POST["passport"];
        if(strlen($passport)>9){
            echo "Not valid DNI length";
            return;
        }

        $letras ="TRWAGMYFPDXBNJZSQVHLCKE";
        $Aletras = str_split($letras);
        $numeros = intval(substr($passport,0,8));
        if($numeros == 0){
            echo "DNI must contein numbers";
            return;
        }

        $letra ="";
        $pos = $numeros%23;
        $cont = 0;
        foreach($Aletras as $i) {
            if($pos == $cont){
            $letra = $i;
            }
            $cont=$cont+1;
        }
        
        if(str_ends_with(strtoupper($passport),$letra)){

        }else{
            echo "Is not a valid DNI";
            return;
        }
        $age = $_POST["age"];
        if ($age>150 ||$age<18) {
            echo "Not a valid age";
            return;
        }
        $genero = $_POST["genero"];
        if ($genero === null) {
            echo "Select one";
            return;
        }
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            return;
        }
        echo "All is Okay";
    }
    ?>
</div>    
</body>
</html>