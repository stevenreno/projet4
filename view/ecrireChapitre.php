<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>test</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <form action="index.php?action=submitPost" method="post">
            <div>
                <label for="chapitre">Chapitre : </label>
                <input type="number" id="numero_chapitre" name="numero_chapitre">
            </div>
            <div>
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titre">
            </div>
            <div>
                <label for="titre">En ligne :</label>
                <input type="number" id="en_ligne" name="en_ligne">
            </div>
            <div>
                <label for="texte">Texte :</label>
                <textarea id="texte" name="contenu"></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer le chapitre</button>
            </div>
        </form>
    </body>
</html>