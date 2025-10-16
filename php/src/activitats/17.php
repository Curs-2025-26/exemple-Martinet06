<?php

$fitxer = './17/productes.csv';
$missatge = "";

// Si s’envia el formulari
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $preu = trim($_POST['preu'] ?? '');

    if ($nom !== '' && $preu !== '') {
        // Obrim el fitxer en mode append (afegeix al final)
        $f = fopen($fitxer, 'a');
        fputcsv($f, [$nom, $preu]);
        fclose($f);
        $missatge = "Producte afegit correctament.";
    } else {
        $missatge = "Falten camps per omplir.";
    }
}

// Llegim el fitxer si existeix
$productes = [];
if (file_exists($fitxer)) {
    $f = fopen($fitxer, 'r');
    while (($fila = fgetcsv($f))) {
        $productes[] = $fila;
    }
    fclose($f);
}
?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió de productes amb CSV</title>
</head>

<body>
    <h1>Gestió de productes amb fitxer CSV</h1>
    <p><a href="../index.php">Tornar a l'inici</a></p>

    <?php if ($missatge): ?>
        <p><?= htmlspecialchars($missatge) ?></p>
    <?php endif; ?>

    <form method="post">
        <label>
            Nom del producte:
            <input type="text" name="nom" required>
        </label>
        <br><br>
        <label>
            Preu (€):
            <input type="number" name="preu" step="0.01" required>
        </label>
        <br><br>
        <button type="submit">Afegir producte</button>
    </form>

    <?php if (!empty($productes)): ?>
        <h2>Llista de productes</h2>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nom</th>
                <th>Preu (€)</th>
            </tr>
            <?php foreach ($productes as $prod): ?>
                <tr>
                    <td><?= htmlspecialchars($prod[0]) ?></td>
                    <td><?= htmlspecialchars($prod[1]) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hi ha productes registrats.</p>
    <?php endif; ?>
</body>

</html>