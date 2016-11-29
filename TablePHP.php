<?php
<<<<<<< HEAD
$LIGNES = (isset($_REQUEST["Lignes"]) ? $_REQUEST["Lignes"] : "0");
$COLONNES = (isset($_REQUEST["Colonnes"]) ? $_REQUEST["Colonnes"] : "0");
=======
    require("Library.inc.php");

    $LIGNES = (isset($_REQUEST["Lignes"]) ? $_REQUEST["Lignes"] : "0");
    $COLONNES = (isset($_REQUEST["Colonnes"]) ? $_REQUEST["Colonnes"] : "0");
>>>>>>> Adrien_Branche
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
            td, th{
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
<<<<<<< HEAD
                Lignes : <input type="number" name="Lignes" value="<?php echo $LIGNES ?>"/>
                Colonnes : <input type="number" name="Colonnes" value="<?php echo $COLONNES ?>"/>
=======
                Lignes : <input type="number" name="Lignes" value="<?php echo $LIGNES?>"/>
                Colonnes : <input type="number" name="Colonnes" value="<?php echo $COLONNES ?>"/>
                Couleur du tableau : 
>>>>>>> Adrien_Branche
                <input type="submit" value="Construire" name="btnSubmit"/>
                </br>
            </form>
            <?php
<<<<<<< HEAD
            define("LIGNES", $LIGNES);
            define("COLONNES", $COLONNES);

            if (($LIGNES > 0) && ($COLONNES > 0)) {
                echo "\n\t<table border='1px, black, solid' borderCollapse='collapse'>";

                for ($l = 0; $l < LIGNES; $l++) {
                    echo "\n\t\t<tr>";
                    for ($i = 0; $i < COLONNES; $i++) {
                        if ($l == 0) {
                            echo "\n\t\t\t<th>" . ($l * COLONNES + $i + 1) . "</th>";
                        } else {
                            echo "\n\t\t\t<td>" . ($l * COLONNES + $i + 1) . "</td>";
                        }
                    }
                    echo "\n\t\t</tr>";
                }
                echo "\n\t</table>";
            }
=======
                AfficheTableau($LIGNES, $COLONNES);
>>>>>>> Adrien_Branche
            ?>
    </body>
</html>
