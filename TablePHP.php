<?php
    require("Library.inc.php");

    $LIGNES = (isset($_REQUEST["Lignes"]) ? $_REQUEST["Lignes"] : "0");
    $COLONNES = (isset($_REQUEST["Colonnes"]) ? $_REQUEST["Colonnes"] : "0");
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
            form{
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div>
            <form>
                Lignes : <input type="number" name="Lignes" value="<?php echo $LIGNES?>"/>
                Colonnes : <input type="number" name="Colonnes" value="<?php echo $COLONNES ?>"/>
                Couleur du tableau : 
                <input type="submit" value="Construire" name="btnSubmit"/>
                </br>
            </form>
            <?php
                AfficheTableau($LIGNES, $COLONNES);
            ?>
    </body>
</html>
