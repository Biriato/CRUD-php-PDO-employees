<html>
<body>

<?php
    $n=$_GET["name"];
    $p=$_GET["pass"];
    $download_picture = "<a href=../../../favicon.ico download>
        <img src=../../../favicon.ico alt=Favicon>
        </a>";
    if(validate($n,$p)){
        echo $download_picture;
    }else{
        echo"User or pass incorrect";
    }
    function validate ($n,$p){
        $vogalsN = str_split($n);
        $vogals = [""];
        $cont = 0;
        $vogalsP = str_split($p);
        foreach($vogalsN as $x){
            if ($x == "A" || $x == "E" ||$x =="I" ||$x == "O" ||$x =="U" ||$x == "a" ||$x =="e" || 
            $x == "i" ||$x == "o" ||$x == "u") {
                $vogals[$cont]=$x;
                $cont++;
            }
        }
        foreach($vogalsP as $w){
            foreach($vogals as $h){
                if($w==$h){
                    return  false;
                }
            }
        }
        return true;
    }
?>


</body>
</html>