<?php

require_once '../../vendor/autoload.php';

use App\SessionAuth;
use App\Usuari;

SessionAuth::start();

//Usuari fix
$usuariFix = new Usuari("admin", "admin@gmail.com", "1234");

// Logout si se pide
if (isset($_GET['logout'])) {
    SessionAuth::logout();
    header('Location: login.php');
    exit;
}

// Si el usuario ya está autenticado, muestra mensaje
if (SessionAuth::isAuthenticated()) {
    $nom = SessionAuth::getUser();
    echo "<h1>Benvingut, $nom!</h1>";
    echo "<a href='?logout'>Tancar sessió</a>";
    exit;
}

// Procesar login si hay POST
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuari = $_POST['usuari'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($usuariFix->validar($usuari, $password)) {
        SessionAuth::login($usuariFix->getNom());
        header('Location: login.php');
        exit;
    } else {
        $error = "Usuari o contrasenya incorrecte.";
    }
}
?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login amb sessió</title>
</head>

<body>
    <h1>Login amb sessió i classe Usuari</h1>
    <p><a href="../index.php">Tornar a l'inici</a></p>

    <?php if (!empty($error)): ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
        <label>
            Usuari:
            <input type="text" name="usuari" required>
        </label>
        <br>
        <label>
            Contrasenya:
            <input type="password" name="password" required>
        </label>
        <br>
        <button type="submit">Iniciar sessió</button>
    </form>
</body>

</html>