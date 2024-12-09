<?php
$servername = "localhost";
$username = "admin";
$password = "abc123.";
$myDB = "world";

//REMEMBER: keywords in SQL ar not CASESENSITIVE. OBJECT NAMES (tables, rows...) ARE

try {
  //1.Open
  $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  //2.Process
  $sql = "SELECT * from city";  
  $result = $conn->query($sql);

  while ($tuple = $result->fetch(PDO::FETCH_OBJ)){
    echo $tuple->Name. "<<>>" . $tuple->District . "<br>"; 
  }

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//3.Close
$conn = null;
?>