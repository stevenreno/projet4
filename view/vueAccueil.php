<div class="main">
<?php foreach ($listeChapitre as $key => $object) {
?>
    <section>
        <h1>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h1>
        <p><?php $contenu = substr($object->_contenu, 0,500); echo $contenu."[...]";?></p>
        <p><?php echo $object->_date_creation;?></p>
        <a href="index.php?action=lirePlus&amp;id=<?=$object->_id;?>">Lire plus</a>
    </section>

<?php };?>
<div class="nbPage">
<?php
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
    </div>
</div>



