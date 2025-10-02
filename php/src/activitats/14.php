<?php
session_start();
$missatge_error = "";
$usuariCorrecte = "admin";
$clauCorrecta = "1234";
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: 14.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuari = $_POST['usuari'] ?? '';
    $clau = $_POST['clau'] ?? '';
    if ($usuari === $usuariCorrecte && $clau === $clauCorrecta) {
        $_SESSION['login'] = true;
        $_SESSION['usuari'] = $usuari;
        header("Location: 14.php");
        exit();
    } else {
        $missatge_error = "Usuari o contrasenya incorrectes.";
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 14</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <h1>Activitat 14</h1>
    <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
        <p>Benvingut, <?php echo htmlspecialchars($_SESSION['usuari']); ?>!</p>
        <a href="14.php?logout=true">Tancar sessió</a>
    <?php else: ?>
        <?php if ($missatge_error): ?>
            <p style="color: red;"><?php echo htmlspecialchars($missatge_error); ?></p>
        <?php endif; ?>
        <form method="post" action="14.php">
            <label for="usuari">Usuari:</label>
            <input type="text" id="usuari" name="usuari" required>
            <br><br>
            <label for="clau">Contrasenya:</label>
            <input type="password" id="clau" name="clau" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
</body>
</html>
