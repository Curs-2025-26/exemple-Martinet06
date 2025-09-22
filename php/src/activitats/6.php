<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 6</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <?php
        $nota = 10;

        echo "<h1>Activitat 6</h1>";

        echo "<p>Nota: " . match($nota) {
            5,6,7 => "Bé",
            8,9 => "Molt bé",
            10 => "Excel·lent",
            default => "Insuficient",
        } . "</p>";

        echo "<br>";

        $producte = "pa";

        $preu = match ($producte) {
            'pa' => 1.00,
            'llet' => 1.50,
            'formatge' => 2.50,
            default => 0.0,
        };

        echo "<p>El preu del $producte és de: $preu €</p>";
    ?>
</body>
</html>
