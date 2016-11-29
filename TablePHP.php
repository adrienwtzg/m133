<!DOCTYPE html>
<html>
    <head>
        <title>Tableau en PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table{
                border-style: solid;
                border-color: #000000;
                border-width: 1px;
                color: #000000;
            }
            th{
                background-color: #AAAAAA;
                color: #FFFFFF;
            }
        </style>
    </head>
    <body>
<<<<<<< HEAD
        <div>
            <?php
            $LIGNES = 3;
            $COLONNES = 4;

            for ($l = 0; $l < $LIGNES; $l++) {
                echo "";
                for ($l = 0; $l < $COLONNES; $l++) {
                    
=======
        <?php
            define("LIGNES", 3);
            define("COLLONES", 4);
            
            echo "\n\t<table>";
            
            for($l = 0; $l < LIGNES; $l++)
            {
                echo "\n\t\t<tr>";
                for($i = 0; $i < COLLONES; $i++)
                {
                    echo "\n\t\t\t<td>" . ($l * COLLONES + $i + 1) . "</td>";
>>>>>>> Adrien_Branche
                }
                echo "\n\t\t</tr>";
            }
<<<<<<< HEAD
            ?>
=======
            
            echo "\n\t</table>";
        ?>
        <div>
>>>>>>> Adrien_Branche
        </div>
    </body>
</html>
