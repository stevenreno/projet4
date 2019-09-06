<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="Blog publiant 'Billet simple pour l'Alaska' de Jean Forteroche" />
    <title></title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>


    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
<div>
    <header id="header">
        <nav>
            <ul class="menu">
                <a class="logo" href="index.php"><span class="symbol"><img src="assets/images/logo_alaska.jpg"></span></a>
                    <?php
                    if (!empty($_SESSION['pseudo'])) {
                        echo '<li class="current"> <a>Bonjour Jean Forteroche</a></li>';
                        echo '<li class="current"><a href="index.php?action=deconnexion" onclick="return confirm(\'Voulez vous vraiment vous déconnecter ?\')">Déconnexion</a></li>';
                        echo '<li class="current"><a href="index.php?action=administration"> Administration</a></li>';

                    } else {
                        echo '<li><a href="index.php?action=login">Connexion</a></li>';
                    }
                    ?>
            </ul>
        </nav>
    </header>
</div>
<body>
<?php echo $content
?>
</body>
</html>
<script src="assets/js/message.js"></script>
<script src="assets/js/main.js"></script>
