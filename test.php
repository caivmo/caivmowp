<?php
/**
 * Script PHP Sencillo
 * Un ejemplo básico de PHP
 */

// Saludo simple
echo "¡Hola! Este es un script PHP sencillo.\n\n";

// Variables básicas
$nombre = "Mundo";
$edad = 2025;
$precio = 99.99;

echo "Nombre: $nombre\n";
echo "Año: $edad\n";
echo "Precio: $" . number_format($precio, 2) . "\n\n";

// Lista de frutas
$frutas = ["Manzana", "Banana", "Naranja"];

echo "Mis frutas favoritas:\n";
foreach ($frutas as $fruta) {
    echo "- $fruta\n";
}

echo "\n";

// Función simple
function saludar($persona) {
    return "¡Hola, $persona! ¿Cómo estás?";
}

echo saludar("Desarrollador") . "\n";

// Operaciones matemáticas
$a = 10;
$b = 5;

echo "\nOperaciones:\n";
echo "$a + $b = " . ($a + $b) . "\n";
echo "$a - $b = " . ($a - $b) . "\n";
echo "$a * $b = " . ($a * $b) . "\n";
echo "$a / $b = " . ($a / $b) . "\n";

echo "\n¡Script completado exitosamente!\n";
?>
