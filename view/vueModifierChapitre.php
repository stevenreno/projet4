 <form action="index.php?action=modifierChapitre&amp;id=<?=$chapitre->getId();?>" method="post">
        <div>
            <label for="chapitre">Chapitre : </label>
            <input type="number" id="numero_chapitre" name="numero_chapitre" value="<?php echo $chapitre->getNumeroChapitre();?>">
        </div>
        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" value="<?php echo $chapitre->getTitre();?>">
        </div>
        <div>
            <label for="titre">En ligne :</label>
            <input type="checkbox" id="en_ligne" name="en_ligne" value="1"
                <?php  if($chapitre->getEnLigne() == 1){ echo "checked = 'checked'";}?>>
        </div>
        <div>
            <label for="texte">Texte :</label>
            <textarea id="texte" name="contenu"><?php echo $chapitre->getContenu();?></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le chapitre</button>
        </div>
    </form>

