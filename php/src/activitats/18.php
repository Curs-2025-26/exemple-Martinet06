<?php
require_once '../../vendor/autoload.php';
use App\Models\Usuari;
$usuari = new Usuari("Marti", "mmollsegui@gmail.com");
$usuari->saluda();