<?php
session_start(); // Iniciem la sessió
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Comprovem si el formulari s'ha enviat
    if (isset($_POST['producte']) && !empty(trim($_POST['producte']))) { // Comprovem que el camp no estigui buit
        $producte = trim($_POST['producte']); // Netejem l'entrada
        
        if (!isset($_SESSION['cistella'])) { // Inicialitzem la cistella si no existeix
            $_SESSION['cistella'] = [];
        }

        $_SESSION['cistella'][] = $producte; // Afegim el producte a la cistella
        //header("Location: 02_cistella_veure.php"); // Redirigim a la pàgina per veure la cistella
        //exit();
    } else {
        $error = "Si us plau, introdueix un nom de producte vàlid.";
    }
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
    <a href="../index.php">Tornar al inici</a>
    <h1>Activitat 12 i 13</h1>

    <form method="post">
        <label for="producte">Nom del producte:</label>
        <input type="text" id="producte" name="producte" required>
        <button type="submit">Afegir a la cistella</button><br>
    <a href="02_cistella_veure.php">Veure Cistella</a>
    
</body>
</html>