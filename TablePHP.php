<?php ?>
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
            form{
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div>
            <form>
                Lignes : <input type="number" name="Lignes" value=""/>
                Colonnes : <input type="number" name="Colonnes" value=""/>
                <input type="submit" value="Construire" name="btnSubmit"/>
                </br>
            </form>
            <?php
            $LIGNES = (isset($_REQUEST["Lignes"]) ? $_REQUEST["Lignes"] : "0");
            $COLONNES = (isset($_REQUEST["Colonnes"]) ? $_REQUEST["Colonnes"] : "0");

            define("LIGNES", $LIGNES);
            define("COLONNES", $COLONNES);

            if (($LIGNES > 0) && ($COLONNES > 0)) {
                echo "\n\t<table border='1px, black, solid' borderCollapse='collapse'>";

                for ($l = 0; $l < LIGNES; $l++) {
                    echo "\n\t\t<tr>";
                    for ($i = 0; $i < COLONNES; $i++) {
                        echo "\n\t\t\t<td>" . ($l * COLONNES + $i + 1) . "</td>";
                    }
                    echo "\n\t\t</tr>";
                }
                echo "\n\t</table>";
            }
            ?>
    </body>
</html>
