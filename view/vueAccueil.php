<div class="main">

<?php echo $message;
foreach ($listeChapitre as $key => $object) {
?>
    <section>
        <h1>Chapitre n°<?php echo $object->getNumeroChapitre();?> : <?php echo $object->getTitre(); ?></h1>
        <p><?php $contenu = substr($object->getContenu(), 0,500); echo $contenu."[...]";?></p>
        <a href="index.php?action=lirePlus&amp;id=<?=$object->getId();?>">Lire plus</a>
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



