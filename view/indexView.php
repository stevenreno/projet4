<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>test</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
 
       <?php
        while ($line = $results->fetch_assoc()) {
        ?>
        <div class= test style="color: red">
        <?php 
            echo $line['contenu'];
        }
        $mysqli->close();
        ?>
        </div>
    </body>
</html>