<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blog publiant 'Billet simple pour l'Alaska' de Jean Forteroche" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>


    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
<main>
    <header id="header">
        <nav>
            <ul class="menu">
                <a class="logo" href="index.php"><span class="symbol"><img src="assets/images/logo_alaska.jpg"></span></a>
                    <?php
                    if (!empty($_SESSION['pseudo'])) {
                        echo '<li class="current"> <a>Bonjour ' . htmlspecialchars($_SESSION['pseudo']) . '</a></li>';
                        echo '<li class="current"><a href="index.php?action=deconnexion">Déconnexion</a></li>';
                        echo '<li class="current"><a href="index.php?action=administration"> Administration</a></li>';

                    } else {
                        echo '<li><a href="index.php?action=login">Connexion</a></li>';
                    }
                    ?>
            </ul>
        </nav>
    </header>

<body>
<?php echo $content
?>
</body>
</html>
<script src="assets/js/supprimer.js"></script>
<script src="assets/js/main.js"></script>
