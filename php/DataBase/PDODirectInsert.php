<?php
$servername = "localhost";
$username = "admin";
$password = "abc123.";

try {
    //Open
  $conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br>";
  //Process
    //copy the template from php.myadmin
    //INSERT INTO `city` (`ID`, `Name`, `CountryCode`, `District`, `Population`) VALUES (NULL, 'Gebara', 'CUB', '', '0');
    //$sql ="INSERT INTO city (Name,CountryCode,Population) VALUES ('Baldrei','ESP',5)";
    //2.Insert with variables
    // $namecity ="Gondomar";
    // $popu = 20000;
    // $cc = "ESP";
    // $sql ="INSERT INTO city (Name,CountryCode,Population) VALUES ('".$namecity."','".$cc ."' , $popu)";

    //3.Insert from a form
    $namecity =$_POST["name"];
    $popu = $_POST["p"];
    $cc = $_POST["code"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $sql ="INSERT INTO city (Name,CountryCode,Population) VALUES ('$namecity', '$cc', $popu)";

    echo $sql;//sometimes its important to debug

    $conn->exec($sql);
    echo "<br> Record inserted";
    }
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>