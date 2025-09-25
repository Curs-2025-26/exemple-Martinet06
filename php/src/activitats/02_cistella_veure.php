<?php
session_start(); // Iniciem la sessió

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buidar'])) {
    unset($_SESSION['cistella']); // Buidem la cistella
    header("Location: 02_cistella_veure.php"); // Redirigim a la pàgina de visualització de la cistella
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cistella de la compra</title>
</head>
<body>
    <a href="./12_13.php">Tornar a la tenda</a>
        <h1>Cistella de la compra</h1>
        <?php
        if (isset($_SESSION['cistella']) && !empty($_SESSION['cistella'])) {
            echo "<ul>";
            foreach ($_SESSION['cistella'] as $index => $producte) {
                echo "<li>" . htmlspecialchars($producte) . "</li>";
            }
            echo "</ul>";
            echo '<form method="post">
                    <button type="submit" name="buidar">Buidar Cistella</button>
                  </form>';
        } else {
            echo "<p>La cistella està buida.</p>";
        }
        ?>
</body>
</html>