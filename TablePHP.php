<?php
require("Library.inc.php");

$LIGNES = (isset($_REQUEST["Lignes"]) ? $_REQUEST["Lignes"] : "0");
$COLONNES = (isset($_REQUEST["Colonnes"]) ? $_REQUEST["Colonnes"] : "0");
$TH = $_REQUEST["TH"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tableau en PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table{
                border: 1px black solid;
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
            legend{

            }
        </style>
    </head>
    <body>
        <div>
            <form>
<<<<<<< HEAD
                Lignes : <input type="number" name="Lignes" value="<?php echo $LIGNES ?>"/>
                Colonnes : <input type="number" name="Colonnes" value="<?php echo $COLONNES ?>"/>
                Couleur du tableau : 
=======
                <legend style="margin: 10px 0px 10px 0px">Lignes : </legend><input type="number" name="Lignes" value="<?php echo $LIGNES ?>"/>
                <legend style="margin: 10px 0px 10px 0px">Colonnes : </legend><input type="number" name="Colonnes" value="<?php echo $COLONNES ?>"/><br>
                1<sup>ère</sup> ligne surligné : <input type="checkbox" name="TH" value="true" style="margin: 10px 0px 10px 0px"/><br> 
>>>>>>> Adrien_Branche
                <input type="submit" value="Construire" name="btnSubmit"/>
                </br>
            </form>
            <?php
            AfficheTableau($LIGNES, $COLONNES, $TH);
            ?>
    </body>
</html>
