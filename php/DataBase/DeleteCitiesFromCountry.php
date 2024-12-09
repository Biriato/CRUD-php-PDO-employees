<!DOCTYPE html>
<html>
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

    //echo "Connection successfully<br>";

    $sql = "SELECT name, code from country";
    $result = $conn->query($sql);
?>
<form action="DeleteCitiesFromCountry.php" method="get">
Country: <select id = "countryCode" name="countryCode">
<?php
    foreach ($result as $row){
        echo '<option  value="' . $row["code"] .'">'.  $row["name"]  . '</option>';
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
    $code = $_GET["countryCode"];
    $sql = "DELETE FROM city WHERE CountryCode = '$code' ;";
    $num = $conn->exec($sql);

    echo "Number of deleted records: ".$num;
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