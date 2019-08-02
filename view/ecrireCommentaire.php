<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>test</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <form action="index.php?action=submitComment" method="post">
            <div>
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteurs">
            </div>
            <div>
                <label for="Titre">Titre : </label>
                <input type="text" id="titre" name="titre">
            </div>
            <div>
                <label for="texte">Commentaire :</label>
                <textarea id="texte" name="contenu_commentaire"></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer le commentaire</button>
            </div>
        </form>
    </body>
</html>