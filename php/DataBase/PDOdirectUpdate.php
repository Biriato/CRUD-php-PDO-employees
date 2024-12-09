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
    //$sql = "UPDATE `city` SET `District` = 'Kabol' WHERE `city`.`ID` = 1;";
    //$sql = "UPDATE `city` SET `District` = 'hola' WHERE `city`.`ID` = 5;";
    //$sql = "UPDATE city SET CountryCode = 'ESP' WHERE CountryCode = 'ITA';";
    $sql = "UPDATE city SET Population = Population+(Population*10/100) WHERE CountryCode = 'PRT'";
    $num = $conn->exec($sql);

    echo "Number of updated records: ".$num;
}
 catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>