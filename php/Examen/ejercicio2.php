<?php
    $myfile = fopen("palabras.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
         echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    $myfile = fopen("palabras.txt", "r") or die("Unable to open file!");
    $myfile2 = fopen("desordenadas.txt", "a") or die("Unable to open file!");  

    while(!feof($myfile)) {
        $palabra = fgets($myfile);
        $palabra = trim($palabra);
        $desordenada = str_shuffle($palabra);
        $suma_longitudes += strlen($palabra);     
        $desordenada = $desordenada . "#" . $suma_longitudes;
        fwrite($myfile2, $desordenada."\n");
        $suma_longitudes = 0;
   }
   fclose($myfile);
   fclose($myfile2);


?>