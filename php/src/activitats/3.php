<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 3</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <?php 
        $nom = "Martí";
        echo "<h1>Activitat 3</h1>";
        echo "Hola, " . $nom; 
        echo "<br>";
        echo "Hola, " . '$nom'; // aquí mostrará el texto literal $nom
    ?>
</body>
</html>

