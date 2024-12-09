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
    //$sql = "DELETE FROM city WHERE  ID = 4083";
     //$sql = "DELETE FROM country WHERE `country`.`Code` = 'AFG'";
    $num = $conn->exec($sql);

    echo "Number of deleted records: ".$num;
}
 catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>