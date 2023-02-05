<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once 'includes/head.php' ?>
  <link rel="stylesheet" href="./public/css/add-article.css">
  <title>Créeer un artcile</title>
</head>

<body>
  <div class="container">
    <?php require_once 'includes/header.php' ?>
    <div class="content">
    <div class="block p20 form-container">
            <h1>Ecrire un article</h1>
            <form action="./add-article.php" method="post">
                    <div class="form-control">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title">
                        <p class="text-error"></p>
                    </div>
                    <div class="form-control">
                        <label for="image">Image</label>
                        <input type="text" name="image" id="image">
                        <p class="text-error"></p>
                    </div>
                    <div class="form-control">
                        <label for="category">Titre</label>
                        <input type="text" name="category" id="category">
                        <select name="category" id="category">
                            <option value="technology">Technloogie</option>
                            <option value="politics">Politique</option>
                            <option value="nature">Nature</option>
                        </select>
                        <p class="text-error"></p>
                    </div>
                    <div class="form-control">
                        <label for="content">Titre</label>
                        <textarea name="content" id="content"></textarea>
                        <p class="text-error"></p>
                    </div>
                    <div class="form-action">
                        <button class="btn btn-secondary" type="button">Annuler</button>
                        <button class="btn btn-primary" type="submit">Sauvegarder</button>
                    </div>

            </form>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
  </div>
</body>

</html>