<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formTeam.php" method="get">
        <label for="teams">Choose a team:</label>
        <select name="teams" id="teams" >
            <?php
                $myfile = fopen("data/dataTeam.txt", "r") or die("Unable to open file!");
                while(!feof($myfile)) {
                    $data = explode('#',fgets($myfile));
                   echo "<option value=\"$data[0]\">$data[0]</option>";
                }
                fclose($myfile);
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>