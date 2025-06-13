<?php
$var1 = 5;
$var2 = 3;

function suma($valor1, $valor2)
{
    return $valor1 + $valor2;
}

try{
    $result = suma($var1, $var3);
    echo $result;
}catch(Exception $e){
    echo "Variable no definida";
}
?>
