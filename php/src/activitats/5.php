<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 5</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <?php
        $frutes = ["poma", "plàtan", "maduixa"];

        echo "<h1>Activitat 5</h1>";

        echo "<p>Primera fruita: " . $frutes[0] . "</p>";

        $frutes[] = "taronja";

        echo "<h2>Llista de fruites:</h2>";
        echo "<ul>";
        foreach ($frutes as $fruta) {
            echo "<li>$fruta</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>
