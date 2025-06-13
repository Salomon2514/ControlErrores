<?PHP
function manejarExcepcion($exception) {
    // Registrar el error en un archivo
    $log = "[Fecha: " . date("Y-m-d H:i:s") . "] ";
    $log .= "Excepción no atrapada: " . $exception->getMessage() . "\n";
    file_put_contents('errores.log', $log, FILE_APPEND);

    // Mostrar mensaje amigable al usuario
    echo "<h2>Oops... algo salió mal.</h2>";
    echo "<p>Estamos trabajando para solucionar el problema. Intenta más tarde.</p>";

    // Si estás en desarrollo, puedes mostrar detalles técnicos:
    // echo "<pre>" . $exception . "</pre>";
}

set_exception_handler('manejarExcepcion');

// Lanzar una excepción no atrapada
throw new Exception("Error crítico en el sistema");
?>
?