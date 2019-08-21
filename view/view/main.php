<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blog publiant 'Billet simple pour l'Alaska' de Jean Forteroche" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="public/css/style.css" rel="stylesheet" />
    <link href="public/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC|Pacifico|Roboto|Slabo+27px" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <!-- Twitter Card data -->
    <!-- Open Graph data -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="public/img/flavicon-book.png" />
    <meta property="og:description" content="Blog publiant 'Billet simple pour l'Alaska' de Jean Forteroche" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <!-- ajouter meta -->
</head>

<body>
<main>
    <header>
        <div id="barre-menu">
            <a href="#" class="header-icon" id="header-icon"></a>
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?action=about">À propos</a></li>
                    <?php
                    if (!empty($_SESSION['pseudo'])) {
                        echo '<li><a href="#"><i class="fas fa-user"></i> ' . htmlspecialchars($_SESSION['pseudo']) . '</a></li>';
                        echo '<li><a href="index.php?action=deconnexion">Déconnexion</a></li>';
                        echo '<li><a href="index.php?action=administration"><i class="fas fa-key"></i> Administration</a></li>';

                    } else {
                        echo '<li><a href="index.php?action=login">Connexion / Inscription</a></li>';
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
