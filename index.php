<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a= array ();

    $a1 [0] = "Ivaiporã";
    $a1 [1] = "Jardim Alegre";
    $a1 [2] = "Pitanga";
    $a1 [3] = "Manoel Ribas";
    $a1 [4] = "Arapuã";
    $a1 [5] = "Ariranha do Ivaí";
    
    foreach ($a1 as $valor){
        echo "$valor <br/>";
        echo"<br/>";
    } 
    echo"<br/>";
    echo"<br/>";
    $b1= array ();

    $b1 [0][0]= "Ivaiporã";
    $b1 [0][1]= "Aproximadamente 32 mil habitantes. Fonte:IBGE";

    $b1 [1][0]= "Jardim Alegre";
    $b1 [1][1]= "Aproximadamente 12 mil habitantes. Fonte:IBGE";

    $b1 [2][0]= "Pitanga";
    $b1 [2][1]= "Aproximadamente 31 mil habitantes. Fonte:IBGE";

    $b1 [3][0]= "Manoel Ribas";
    $b1 [3][1]= "Aproximadamente 14 mil habitantes. Fonte:IBGE";

    $b1 [4][0]= "Arapuã";
    $b1 [4][1]= "Aproximadamente 3 mil habitantes. Fonte:IBGE";

    $b1 [5][0]= "Ariranha do Ivaí";
    $b1 [5][1]= "Aproximadamente 2 mil habitantes. Fonte:IBGE";

    foreach ($b1 as $valor){
        foreach ($valor as $valor_1){
            echo "$valor_1 <br/><hr/>";
        }
    }

?>
</body>
</html>