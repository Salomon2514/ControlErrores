<?php
$var1 = 5;
$var2 = 3;

function suma($valor1, $valor2)
{
    return $valor1 + $valor2;
}

// Convertir errores en excepciones
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

try {
    $result = suma($var1, $var3); // $var3 no está definida
    echo $result;
} catch (ErrorException $e) {
    echo "Error capturado: " . $e->getMessage();
}
?>