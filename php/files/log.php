<?php
$myfile = fopen("data/log.txt", "a") or die("Unable to open file!");
$txt = date(DATE_ATOM) . "#$_SERVER[REMOTE_ADDR]#$_SERVER[HTTP_USER_AGENT]\n";
fwrite($myfile, $txt);
fclose($myfile);
?>