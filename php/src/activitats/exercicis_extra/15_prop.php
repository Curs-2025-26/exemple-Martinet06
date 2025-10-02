<?php
require_once  '/../../../vendor/autoload.php';
use App\Models\Persona;
use App\Models\Empleado;
// Exemple d'ús
echo "<a href='index_prop.php'>Tornar al inici</a><br><br>\n";
echo "<h1>Activitat 15 - Exercici Extra</h1>\n";
$persona = new Persona("Joan", "Garcia", 30);
echo Persona::toHtml($persona);
$empleado = new Empleado("Maria", "Lopez", 45, 4000);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);
echo Empleado::toHtml($empleado);
?>