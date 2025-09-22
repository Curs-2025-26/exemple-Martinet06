<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <a href="../index.php">Tornar al inici</a>
    <h1>Activtat 9</h1>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Validate name
        if (empty(trim($_POST["name"]))) {
            $nameErr = "El nom és obligatori.";
        } else {
            $name = htmlspecialchars(trim($_POST["name"]));
        }

        // Validate email
        if (empty(trim($_POST["email"]))) {
            $emailErr = "El correu electrònic és obligatori.";
        } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $emailErr = "El correu electrònic no és vàlid.";
        } else {
            $email = htmlspecialchars(trim($_POST["email"]));
        }

        // If no errors, display the data
        if (empty($nameErr) && empty($emailErr)) {
            echo "<h3>Dades rebudes:</h3>";
            echo "<p>Nom: $name</p>";
            echo "<p>Correu electrònic: $email</p>";
            exit;
        }
    }
    ?>

    <h2>Formulari</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nom:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <span class="error"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Correu electrònic:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
