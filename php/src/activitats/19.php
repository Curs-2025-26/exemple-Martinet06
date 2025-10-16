<?php
require_once '../../vendor/autoload.php';

use App\Producte;

echo "<a href=\"../index.php\">Tornar al inici</a><br>";
$producte = new Producte("Televisor", 500);
$producte->mostrar();
