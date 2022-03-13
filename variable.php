<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    //OPERATOR ARITMATIKA
    $a = 2;
    $b = 3;
    $c = 5;
    $d = 10;
 
    echo "<br/> PENJUMLAHAN <br/>";
    echo $a+$b; //tercetak 5
    echo "<br/>";
    $f = $c+$d;
    echo $f;        //tercetak 15
    echo "<br/>";
 
    echo "<br/> PENGURANGAN <br/>";
    echo ($a-$d)."<br/>"; //tercetak -8
    $f = $d-(-$c);
    echo $f."<br/>";      //tercetak 15
    echo -$d."<br/>";     //tercetak -10
 
    echo "<br/> PERKALIAN <br/>";
    echo ($a*$b)."<br/>"; //tercetak  6
    echo ($b*-$c)."<br/>";    //tercetak -10

    ?>
</body>
</html>