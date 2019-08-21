<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>test</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>

<?php
while ($data = $commentaire->fetch()) {
    if (!empty($data)) {
        ?>

        <div class="post">
            <div class="headPost">
                <h1> <?= ($data['titre']); ?></h1>
                <h2><?= ($data['auteurs']); ?></h2>
                <p><?= ($data['contenu_commentaire']); ?></p>
            </div>
        </div>
        <?php
    }
    else{
        echo "Aucun commentaire";
    }
}
?>
</div>
</body>
</html>