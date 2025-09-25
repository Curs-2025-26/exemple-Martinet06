<?php
    session_start(); // Iniciem la sessió
    if (!isset($_SESSION['visitas'])) {
        $_SESSION['visitas'] = 1; // Si no està definida, la inicialitzem a 1
    }else{
        $_SESSION['visitas']++; // Si ja està definida, la incrementem en 1
    }
    if (isset($_POST['reset'])) {
        session_destroy(); // session_unset(); Les dos funcions serveixen per reiniciar la sessió
        header("Location: " . $_SERVER['PHP_SELF']); //header("Location: ./11.php");
        exit(); // Evitar que s'executi més codi després del redireccionament
    }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 11</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <?php 
        echo "<h1>Activitat 11</h1>";
        echo "<p>Has visitat aquesta pàgina " . $_SESSION['visitas'] . " vegades.</p>"; // Mostrem el número de visites
    ?>
    <form method="post">
        <button type="submit" name="reset">Reiniciar comptador</button> <!-- Botó per reiniciar el comptador -->
    </form> 
</body>
</html>
