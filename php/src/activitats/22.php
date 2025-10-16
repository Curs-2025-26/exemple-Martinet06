<?php
require_once '../../vendor/autoload.php';

use App\SessionAuth;
use App\Usuari;

SessionAuth::start();

// Si no està autenticat → redirigir a login
if (!SessionAuth::isAuthenticated()) {
    header('Location: login.php');
    exit;
}

// Recuperar usuari actual
$nomUsuari = SessionAuth::getUser();

// Crear objecte d'Usuari només per mostrar info
$usuari = new Usuari($nomUsuari, "admin@gmail.com", "1234");
?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 22</title>
</head>

<body>
    <h1>Activitat 22</h1>
    <p><a href="../index.php">Tornar a l'inici</a></p>
    <p>Benvingut, <?= htmlspecialchars($usuari->getNom()) ?>!</p>
    <p><?= $usuari->saluda(); ?></p>
    <p><a href="login.php?logout">Tancar sessió</a></p>
</body>

</html>