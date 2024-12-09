<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);

// Echo session variables that were set on previous page
echo "<br>","Session ID: " .  session_id() . ".<br>";
echo "Session name: " . session_name() . ".";

?>
</body>
</html>