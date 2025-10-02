<?php
if (isset($_GET['temaClar'])) {
    setcookie('tema', 'clar', time() + 86400); // 1 dia
    header("Location: 16.php");
    exit();
} elseif (isset($_GET['temaFosc'])) {
    setcookie('tema', 'fosc', time() + 86400); // 1 dia
    header("Location: 16.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 16</title>
</head>
<?php
$tema = $_COOKIE['tema'] ?? 'clar';
$backgroundColor = $tema === 'fosc' ? '#121212' : '#FFFFFF';
$textColor = $tema === 'fosc' ? '#FFFFFF' : '#000000';
echo "<style>
        body {
            background-color: $backgroundColor;
            color: $textColor;
        }
      </style>";
?>
<body>
    <a href="../index.php">Tornar al inici</a>
    <h1>Activitat 16</h1>

    <a href="?temaClar">Tema Clar</a> |
    <a href="?temaFosc">Tema Fosc</a>
</body>