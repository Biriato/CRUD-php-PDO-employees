<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Files2.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $pass = $_POST["pass"];
            $b = false;
            $myfile = fopen("users.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
                $data = explode('#',fgets($myfile));
                if($data[0] == $name && trim($data[1]) == $pass){
                    $b = true;
                    break;
                }
            }
            if($b == true){
                echo "You are logged now";
            
            }else{
                echo 'Pass or user wrong';
            }
            
        fclose($myfile);
        }
        
    
    ?>
</body>
</html>