<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "admin";
$password = "abc123.";
$myDB="world";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT  DISTINCT  Language from countrylanguage";
    $result = $conn->query($sql);
?>
<form action="ejercicio3.php" method="get">
Idiomas: <select id = "idiomas" name="idiomas">
<?php
    foreach ($result as $row){
        echo '<option  value="' . $row["Language"] . '">' . $row["Language"]  . '</option>';
    }
?>
</select>
<input type="submit">
</form>
<?php
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
<?php
$servername = "localhost";
$username = "admin";
$password = "abc123.";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
try {
    //Open
  $conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br>";
  //Process
    $code = $_GET["idiomas"];
    $sql = "SELECT country.Name from country join countrylanguage on country.Code = countrylanguage.CountryCode
    where countrylanguage.Percentage > 30 and countrylanguage.Language = '$code';";
    $result = $conn->query($sql);
    foreach ($result as $row) {
        echo $row["Name"] ."<br>";
        
      } 
}
 catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
//Close
$conn = null;
?>
</body>
</html>