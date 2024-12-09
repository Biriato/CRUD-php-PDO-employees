<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Files3.php" method="post">
    <label for="link">URL:</label>
    <input type="url"  name="link" id="link">
    <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $doc = new DOMDocument();
        $url = $_POST["link"];
        $doc->loadHTML(file_get_contents($url));
        $links = $doc->getElementsByTagName("a");
        echo "<table border='2px solid black'>
            <tr>
                <td>Text</td>
                <td>URL</td>
            </tr>";
              foreach ($links as $a) {
               echo"<tr>"."<td>".$a->textContent ."</td>".
               "<td>". $a->attributes->getNamedItem("href")->textContent ."</td>".
               "</tr>";
            }
            echo"</table>";
        }
    ?>
    
</body>
</html>