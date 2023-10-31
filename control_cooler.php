<?php
$estado = $_GET['estado']; // obtener el estado desde la URL

// Establecer la conexión con Arduino a través del puerto serie
$puerto_serie = fopen("COM3", "w"); // Reemplaza "COM3" con el puerto serie adecuado
if ($puerto_serie === false) {
    echo "Error al abrir el puerto serie";
} else {
    if ($estado == "encendido") {
        fwrite($puerto_serie, "1"); // enviar comando de encendido a Arduino
    } elseif ($estado == "apagado") {
        fwrite($puerto_serie, "0"); // enviar comando de apagado a Arduino
    }
    fclose($puerto_serie);
}
?>
