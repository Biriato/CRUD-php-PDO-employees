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
    //$sql = "SELECT * FROM city;";
    //$sql = "SELECT Name,Population FROM city where CountryCode = 'ESP';";
    //$sql = "SELECT Name,Population FROM city where CountryCode = (SELECT Code from country where Name='Spain');";
    //$sql = "SELECT city.Name,city.Population FROM city join country on city.CountryCode = country.Code where country.Name = 'Spain';";
    
//cities with more than a million population where English is officially spoken and they are outside of America
    $sql = 'SELECT city.Name FROM city join country on city.CountryCode = country.Code join countrylanguage on country.Code = countrylanguage.CountryCode where countrylanguage.IsOfficial ="T" and country.Continent NOT in("North America","South America") and city.Population > 1000000 and countrylanguage.Language = "English" ';
    $result = $conn->query($sql);
    foreach ($result as $row) {
      echo $row["Name"] ."<br>";
        //echo $row["Name"] . " " . $row["Population"] . "<br>";
    } 

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>