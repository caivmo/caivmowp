<?php
// index.php con malos estándares de codificación para WordPress

function testfunction() {
	echo 'Hola Mundo';} // Falta de indentación y espaciado adecuado

testfunction();

class myClass {
	function __construct() {
		$this->doSomething();} // El nombre de la clase debería estar en mayúscula y métodos en minúscula, además de la indentación
	function doSomething() {
		echo 'Haciendo algo...';} // No hay separación ni comentarios, ni documentación
}

$obj = new myClass();

if ( isset( $_GET['id'] ) ) {
	$id = $_GET['id'];
} else {
	$id = 0;} // Falta de espacios y sangrías en la estructura de control

// Código adicional sin comentarios ni documentación

echo 'El ID es: ' . $id;
