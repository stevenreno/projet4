<form action="index.php?action=envoyerChapitre" method="post">
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
        <input type="checkbox" id="en_ligne" name="en_ligne" value="1">
    </div>
    <div>
        <label for="texte">Texte :</label>
        <textarea id="texte" name="contenu"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le chapitre</button>
    </div>
</form>

