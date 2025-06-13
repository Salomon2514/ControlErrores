<?php
// 1. Definimos el manejador personalizado
function miManejadorDeErrores($errno, $errstr, $errfile, $errline) {
    echo "⚠️ Error capturado:\n";
    echo "Tipo: $errno\n";
    echo "Mensaje: $errstr\n";
    echo "Archivo: $errfile\n";
    echo "Línea: $errline\n";
    
    // Opcional: puedes registrar esto en un archivo o base de datos
    return true; // evita que PHP siga con su manejo por defecto
}

// 2. Le decimos a PHP que use nuestro manejador
set_error_handler("miManejadorDeErrores");

// 3. Generamos un error manualmente
trigger_error("¡Algo salió mal!", E_USER_WARNING);
echo "<br>";
// 4. Otro ejemplo: accediendo una variable no definida
echo $variableInexistente;
?>