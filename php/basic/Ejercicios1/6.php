<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
            
        }
        table{
            border-collapse: collapse;
        }
        .multis{
            background-color:orange;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="multis">X</td>
            <td class="multis">1</td>
            <td class="multis">2</td>
            <td class="multis">3</td>
            <td class="multis">4</td>
            <td class="multis">5</td>
            <td class="multis">6</td>
            <td class="multis">7</td>
            <td class="multis">8</td>
            <td class="multis">9</td>
            <td class="multis">10</td>
            <td class="multis">11</td>
            <td class="multis">12</td>
        </tr>
    
    <?php
        for ($i=1; $i < 13; $i++) { 
            echo "<tr>";
            echo "<td class=multis>$i</td>";
            for ($d=1; $d < 13; $d++) { 
                echo "<td>".($i*$d)."</td>";
            }
            echo "</tr>";
        }
    ?> 
    </table>   
</body>
</html>