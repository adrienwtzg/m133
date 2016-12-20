<?php
    $Password = (isset($_REQUEST["MDP"])?$_REQUEST["MDP"]:"CHOUCROUTE");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
            <input type="text" name="MDP" value="<?php echo $Password ?>">
            <input type="submit" name="Bouton" value="Entrer Le mot de passe">
        </form>
        <?php   # ^ veut dire qu'il n'y a aucun caractères avant
                # [A-Z] Filtre du/des caractères qui vont être analysé
                # {1,1} veut dire qu'il regarde le premier caractère
                # [\w] n'importe quel caractère selon la liste (par exemple ceux ci doivent être ajouté après \w : ._-)
                # {5,7} entre 5 et 7 caractères
                # $ Pas de caractères après
            if (preg_match("/^[A-Z]{1,1}[\w]{5,7}$/", $Password)){
                echo '<h1 style="color: green;">Le Password est juste ('.$Password.')';
            }else if($Password != ""){
                
                    echo '<h1 style="color: red;">le password est faux ('.$Password.')</h1>';
            }
        ?>
        
    </body>
</html>