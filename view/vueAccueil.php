<?php foreach ($listeChapitre as $key => $object) {
?><div>
    <div>
        <h2>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h2>
        <?php $contenu = substr($object->_contenu, 0,500); echo $contenu."[...]";?>
        <?php echo $object->_date_creation;?>
        <a href="index.php?action=lirePlus&amp;id=<?=$object->_id;?>">Lire plus</a>
    </div>
</div>
<?php };
if ($pageCourante > 1){
    echo '<a href="index.php?page='.($pageCourante - 1).'"> Page Précédente</a>';
}
for ($i=1;$i<=$pagesTotales;$i++){
    if($i == $pageCourante) {
        echo $i . ' ';
    } else {
        echo '<a href="index.php?page='.$i.'">'.$i.'</a>';
    }
}
if ($pageCourante < $pagesTotales){
    echo '<a href="index.php?page='.($pageCourante + 1).'"> Page Suivante</a>';
}
?>



