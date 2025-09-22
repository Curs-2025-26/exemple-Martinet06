<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 4</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <?php 
        $edat = 19;
        echo "<h1>Activitat 4</h1>";

        if ($edat >= 18) {
            echo "<p>Ets major d'edat</p>";
        } else if ($edat <= 0) {
            echo "<p>Edat invàlida</p>";
        } else {
            echo "<p>Ets menor d'edat</p>";
        }
    ?>
</body>
</html>
