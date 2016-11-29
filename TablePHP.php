<?php
    $LIGNES = $_REQUEST["Lignes"];
    $COLONNES = $_REQUEST["Colonnes"];
?>
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
                border-collapse: collapse;
            }
            th{
                background-color: #AAAAAA;
                color: #FFFFFF;
            }
            td{
                text-align: center;
                width: 25px;
                height: 25px;
            }
        </style>
    </head>
    <body>
        <div>
            Lignes : <input type="number" name="Lignes" value=""/>
            Colonnes : <input type="number" name="Colonnes" value=""/>
            <input type="submit" value="Construction Table" name="btnSubmit"/>
        <?php
            define("LIGNES", 3);
            define("COLLONES", 4);
            
            echo "\n\t<table border='1px, black, solid' borderCollapse='collapse'>";
            
            for($l = 0; $l < LIGNES; $l++)
            {
                echo "\n\t\t<tr>";
                for($i = 0; $i < COLLONES; $i++)
                {
                    echo "\n\t\t\t<td>" . ($l * COLLONES + $i + 1) . "</td>";
                }
                echo "\n\t\t</tr>";
            }
            echo "\n\t</table>";
        ?>
        <div>
        </div>
    </body>
</html>
