<?php
require_once  '/../../../vendor/autoload.php';
use App\Models\Empleado;
// Exemple d'ús
echo "<a href='index_prop.php'>Tornar al inici</a><br><br>\n";
echo "<h1>Activitat 16 - Exercici Extra</h1>\n";
$empleado = new Empleado("Maria", "Lopez", 45, 4000);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);
echo Empleado::toHtml($empleado);
