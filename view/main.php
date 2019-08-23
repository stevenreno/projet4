<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blog publiant 'Billet simple pour l'Alaska' de Jean Forteroche" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>

<body>
<main>
    <header>
        <div id="barre-menu">
            <a href="#" class="header-icon" id="header-icon"></a>
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <?php
                    if (!empty($_SESSION['pseudo'])) {
                        echo '<li><a href="#"><i class="fas fa-user"></i> ' . htmlspecialchars($_SESSION['pseudo']) . '</a></li>';
                        echo '<li><a href="index.php?action=deconnexion">Déconnexion</a></li>';
                        echo '<li><a href="index.php?action=administration"><i class="fas fa-key"></i> Administration</a></li>';

                    } else {
                        echo '<li><a href="index.php?action=login">Connexion</a></li>';
                    }
                    ?>

                </ul>
            </nav>
        </div>
    </header>

<body>
<?php echo $content
?>
</body>
</html>
