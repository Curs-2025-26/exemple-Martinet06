<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat 8</title>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <h1>Activitat 8</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = trim($_POST["email"]);
        $missatge = trim($_POST["missatge"]);

        if (empty($email) || empty($missatge)) {
            echo "<p style='color:red;'>Tots els camps són obligatoris.</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>El correu electrònic no és vàlid.</p>";
        } else {
            $email = htmlspecialchars($email);
            $missatge = htmlspecialchars($missatge);

            echo "<p style='color:green;'><strong>Formulari enviat correctament!</strong></p>";
            echo "<p><strong>Correu:</strong> $email</p>";
            echo "<p><strong>Missatge:</strong> $missatge</p>";
        }
    }
    ?>
    <form method="POST" action="">
        <label for="email">Correu electrònic:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="missatge">Missatge:</label><br>
        <textarea id="missatge" name="missatge" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
