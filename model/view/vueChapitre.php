<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>test</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
 
       <?php
       while ($data = $chapitres->fetch()) {
           if (!empty($data)) {
               ?>

               <div class="post">
                   <div class="headPost">
                          <h1> <?= ($data['titre']); ?></h1>
                           <p><?= ($data['contenu']); ?></p>
                   </div>
               </div>
               <?php
           }
           else{
               echo "Aucun chapitre";
           }
       }
       ?>
        </div>
    </body>
</html>