<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $pass= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = ($_POST["name"]);
  $pass= ($_POST["pass"]);
  if($name == "Alejandro" && $pass =="abc123.") {
   $text = "You are loged now";
  }else {
    $text="Password or name are wrong";
  }
}
?>
<?php 
  if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo '<h2>PHP Form Validation Example</h2>
<form method="post"  
  Name: <input type=text name=name>
  <br><br>
  Pass: <input type=password name=pass>
  <br><br>
  <input type=submit name=submit value=OK>  
</form>';
  }
?>
<?php
  echo $text;
?>
</body>
</html>