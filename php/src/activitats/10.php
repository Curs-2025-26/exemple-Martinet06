<?php
// Ensure the uploads directory exists
$uploadDir ='./uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Validate file upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $destinationPath = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmpPath, $destinationPath)) {
            $fileUploaded = true;
        } else {
            $errors[] = "Error menejant el fitxer pujat.";
        }
    } else {
        $errors[] = "No has seleccionat cap fitxer o hi ha hagut un error en la pujada.";
    }

    // Validate checkbox selection
    if (isset($_POST['options']) && is_array($_POST['options']) && count($_POST['options']) > 0) {
        $selectedOptions = $_POST['options'];
    } else {
        $errors[] = "Ha de seleccionar minim una opció.";
    }

    // Display results if no errors
    if (empty($errors)) {
        echo "<h2>Informació del archiu:</h2>";
        echo "Nom: " . htmlspecialchars($fileName) . "<br>";
        echo "Tipus: " . htmlspecialchars($fileType) . "<br>";
        echo "Tamany: " . htmlspecialchars($fileSize) . " bytes<br>";
        echo "Localització: " . htmlspecialchars($destinationPath) . "<br>";

        echo "<h2>Opcions seleccionades:</h2>";
        echo "<ul>";
        foreach ($selectedOptions as $option) {
            echo "<li>" . htmlspecialchars($option) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Errors:</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pujar Fitxers i Seleccionar Opció</title>
</head>
<body>
    <h1>Activitat 10</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Upload a file:</label>
        <input type="file" name="file" id="file" required><br><br>

        <label>Selecciona una o més opcions:</label><br>
        <input type="checkbox" name="options[]" value="Option 1"> Opció 1<br>
        <input type="checkbox" name="options[]" value="Option 2"> Opció 2<br>
        <input type="checkbox" name="options[]" value="Option 3"> Opció 3<br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>