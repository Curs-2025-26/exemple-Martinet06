<?php
    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
        setcookie('nom', $nom, time() + 3600); // La cookie dura 1 hora
        echo "<p>Hola, " . htmlspecialchars($nom) . "! El teu nom s'ha desat en una cookie.</p>";
    } elseif (isset($_COOKIE['nom'])) {
        echo "<p>Benvingut de nou, " . htmlspecialchars($_COOKIE['nom']) . "!</p>";
    } else {
        echo "<p>No s'ha detectat cap cookie amb el teu nom.</p>";
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
    <h1>Activitat 15</h1>
    <form method="post" action="15.php">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom)?>" required>
        <br><br>
        <button>Enviar</button>
    </form>
    
</body>
</html>
