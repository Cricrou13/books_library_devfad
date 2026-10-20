<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une catégorie</title>
</head>
<body>
    <h1>Ajouter une nouvelle catégorie</h1>

    <!-- Formulaire en POST -->
    <form action="" method="POST">
        <div>
            <label for="category_name">Nom de la catégorie :</label>
            <input type="text" id="category_name" name="category_name" required>
        </div>
        <div>
            <input type="submit" name="submit" value="ajouter">
        </div>
    </form>

    <!-- Paragraphe pour afficher les messages -->
    <p><?= $data["msg"] ?? "" ?></p>
</body>
</html>