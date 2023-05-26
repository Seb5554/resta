<!DOCTYPE html>
<html>
<head>
    <title>Uploader une image</title>
</head>
<body>
    <?php
    // Vérifier si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Connexion à la base de données
        $dbHost = 'localhost';
        $dbName = 'restaurant';
        $dbUser = 'root';
        $dbPass = '';
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        
        // Récupérer les informations sur l'image
        $image = $_FILES['image']['tmp_name'];
        $imageData = file_get_contents($image);
        $imageName = $_POST['image_name']; // Récupérer le nom de l'image depuis le champ de texte
        
        // Préparer la requête d'insertion
        $stmt = $conn->prepare('INSERT INTO images (name, data) VALUES (:name, :data)');
        $stmt->bindParam(':name', $imageName);
        $stmt->bindParam(':data', $imageData);
        
        // Exécuter la requête
        if ($stmt->execute()) {
            echo 'L\'image a été uploadée avec succès.';
        } else {
            echo 'Une erreur est survenue lors de l\'upload de l\'image.';
        }
    }
    ?>

    <h1>Uploader une image</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <br><br>
        <label for="image_name">Nom de l'image :</label>
        <input type="text" name="image_name" id="image_name" required>
        <br><br>
        <input type="submit" name="submit" value="Uploader">
    </form>
</body>
</html>