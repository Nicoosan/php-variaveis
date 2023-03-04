<!DOCTYPE html>
<html lang="en">
<head>
     <title>Recebendo Parametros</title>
     <meta charset= "utf-8">
</head>
<body>
<?php
    $num1 = 3;
    $num2 = 2;
    $soma     = $num1 + $num2; // ex 3 + 2 = 5
    $subtracao = $num1 - $num2; // ex 3 - 2 = 1
    $divisao   = $num1 / $num2; // ex 3 / 2 = 1,5
    $resto     = $num1 % $num2; // ex 3 % 2 = 5
    echo "<table border='1'>";
    echo "<tr>";
        echo "<td>".$num1." + ".$num2." = </td";
        echo "<td>".$soma."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$num1." - ".$num2." = </td";
        echo "<td>".$subtracao."</td>";
    echo "</tr>";    
    echo "<tr>";
        echo "<td>".$num1." / ".$num2." = </td";
        echo "<td>".$divisao."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$num1." % ".$num2." = </td";
        echo "<td>".$resto."</td>";
    echo "</tr>";

    echo "<table>";
?>
<?php
echo "<br><br>";
echo "<a href='index.php'>voltar</a>"
?>
</body>
</html>