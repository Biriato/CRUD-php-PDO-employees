<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["IDm"]!="")
{
    $myfile = fopen("data/users.txt", "r") or die("Unable to open file!");
    $aux =fopen("data/aux.txt", "w") or die("Unable to open file!");
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]==$_GET["IDm"]){
            $line = $_GET["IDm"] . "#" . $_GET["name"] . "\n";
            fwrite($aux, $line);
        }
        else{
            fwrite($aux, $record);
        }
    }        
    fclose($myfile); 
    fclose ($aux);
    unlink("data/users.txt");
    rename("data/aux.txt","data/users.txt");
    header("Location: home.php");
}

if ($_GET["ID"]!="")
{
    $myfile = fopen("data/users.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]==$_GET["ID"]){
            $id_founded = $fields[0];
            $name =  $fields[1];
            break;
        }
    }        
    fclose ($myfile);
    if (isset($id_founded)) { //draw the form
        ?>
            <form method="get" action="<?php $_SERVER["PHP_SELF"];?>">  
            <br>
            ID: <input type="text" name="IDm" value="<?php echo $id_founded;?>" readonly="readonly">   <br>
            Name: <input type="text" name="name" value="<?php echo $name;?>"> <br>            
            <input type="submit" name="submit" value="Modify">  
            </form>
        <?php
    }
}
?>