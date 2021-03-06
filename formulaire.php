<?php
    session_start(); // Démarre la session
    
    $CompteAdmin = "admin@eduge.ch";
    $passAdmin = "7e240de74fb1ed08fa08d38063f6a6a91462a815"; // Mot de passe de l'admin crypté en sha1 "aaa"
    $login = (isset($_REQUEST["login"])?$_REQUEST["login"]:""); // Stockage de la réponse de l'utilisateur pour le login
    $pass = (isset($_REQUEST["pass"])?sha1($_REQUEST["pass"]):""); // Stockage de la réponse de l'utilisateur pour le pass
    $_SESSION["login"] = $login; // Assignation du login dans la session
    $_SESSION["pass"] = $pass; // Assignation du login dans la session
    $Compt = 0;
    
    if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        $MessageErreurLogin = "Veuillez indiquez une adresse email valide !"; 
    }
    
    $MessageErreurLogin = "";
    $MessageErreurPass = "";
    $AlertTentative = "";
    
    if (($login == "") || ($pass == "")) {
        $MessageErreurLogin = "";
        $MessageErreurPass = "";
        $AlertTentative = "";
    }
    else
    {
       if (($login == $CompteAdmin) && ($pass == $passAdmin)) {  // Condition de mot de passe
            header("Location: /acceuil.php"); // Redirige vers la page d'acceuil de l'admin
            exit();
        }
        elseif ($login != $CompteAdmin)
        {
                $MessageErreurLogin = "Login incorrect !";
                $Compt++;
        }
        elseif (($login == $CompteAdmin) && ($pass != $passAdmin))
        {
            $MessageErreurPass = "Mot de passe incorrect !";
            $Compt++;
        }
        
        if ($Compt >= 3) {
            $AlertTentative = "Vous avez eu 3 tentative !";
        }
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>
                        Login :
                    </td>
                    <td>
                        <input type="email" name="login" required="required" value="<?php echo $login ?>"/>
                    </td>
                    <td>
                        <?php
                            echo "<a style='color: red'>".$MessageErreurLogin."</a>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password :
                    </td>
                    <td>
                        <input type="password" name="pass" required="required"/>
                    </td>
                    <td>
                        <?php
                            echo "<a style='color: red'>".$MessageErreurPass."</a>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Login" name="btnSubmit"/>
                    </td>
                    <td>
                        <?php 
                            echo "<a style='color: red'>".$AlertTentative."</a>";
                        ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--<a href="inscription.php"><input style="position: absolute; top: 63px; left: 140px;" type="submit" value="Subscribe" /></a>-->
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
