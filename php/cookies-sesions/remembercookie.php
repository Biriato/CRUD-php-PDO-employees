<?php
 $cookie_name = "user_login";
 if (isset ($_REQUEST["remember"]) and isset($_REQUEST["usrname"])) {
    $cookie_value = $_REQUEST["usrname"];
    if ($_REQUEST["remember"]=="on") {
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
     }
  }
  else {
        setcookie($cookie_name, "", time() - 3000, "/"); // delete the cookie
     }
 ?>
 <html>
 <body>

<?php
echo var_dump($_REQUEST);
?>

</body>
</html>