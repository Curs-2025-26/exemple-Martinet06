<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activitat 7</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>      
    <h2>Activitat 7</h2>
    <?php
        echo "<p><strong>Nom del servidor:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
        echo "<p><strong>Adreça IP del servidor:</strong> " . $_SERVER['SERVER_ADDR'] . "</p>";
        echo "<p><strong>Software del servidor:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
        echo "<p><strong>Agent d'usuari del client:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
        echo "<p><strong>Mètode de la sol·licitud:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
        echo "<p><strong>URL de la sol·licitud:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
        echo "<p><strong>Referent:</strong> " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No disponible') . "</p>";
        echo "<p><strong>Protocol utilitzat:</strong> " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
        echo "<p><strong>Port utilitzat:</strong> " . $_SERVER['SERVER_PORT'] . "</p>";
    ?>
</body>
</html>