<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un Utilisateur</h1>
        <form action="ajouter_utilisateur.php" method="post" enctype="multipart/form-data"> <!-- N'oubliez pas d'ajouter enctype="multipart/form-data" pour les téléchargements de fichiers -->
            <fieldset>

            <legend>
                Vos informations svp !!!!
            </legend>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="dateNaissance">DateNaissance:</label>
                <input type="date" id="dateNaissance" name="dateNaissance" required>
            </div>
            <div class="form-group">
                <label for="photo">Photo de Profil:</label>
                <input type="file" id="photo" name="photo">
            </div>
            <button type="submit" class="btn">Ajouter</button>
        </fieldset>
        </form>
    </div>
</body>
</html>