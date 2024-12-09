<?php



if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $team = $_GET["teams"];
    
    $myfile = fopen("data/dataTeam.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        $data = explode('#',fgets($myfile));
        if($data[0] == $team){
            echo "The best player is $data[1] and the city of the team is $data[2]";
            break;
        }
    }

    fclose($myfile);
}

?>