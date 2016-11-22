<?php
    session_start(); // Démarre la session
    
    $passAdmin = "7e240de74fb1ed08fa08d38063f6a6a91462a815"; // Mot de passe de l'admin crypté en sha1 "aaa"
    $login = (isset($_REQUEST["login"])?$_REQUEST["login"]:""); // Stockage de la réponse de l'utilisateur pour le login
    $pass = (isset($_REQUEST["pass"])?sha1($_REQUEST["pass"]):""); // Stockage de la réponse de l'utilisateur pour le pass
    $_SESSION["login"] = $login; // Assignation du login dans la session
    $_SESSION["pass"] = $pass; // Assignation du login dans la session
    
    $MessageErreurLogin = "";
    $MessageErreurPass = "";
    
    if (($login == "") || ($pass == "")) {
        $MessageErreurLogin = "";
        $MessageErreurPass = "";
    }
    else
    {
       if (($login == "admin") && ($pass == $passAdmin)) {  // Condition de mot de passe
            header("Location: /acceuil.php"); // Redirige vers la page d'acceuil de l'admin
            exit();
        }
        elseif ($login != "admin")
        {
            $MessageErreurLogin = "Login incorrect !";
        }
        elseif (($login == "admin") && ($pass != $passAdmin))
        {
            $MessageErreurPass = "Mot de passe incorrect !";
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
        <?php
           
        ?>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>
                        Login :
                    </td>
                    <td>
                        <input type="text" name="login" value="<?php echo $login ?>"/>
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
                        <input type="password" name="pass"/>
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
                </tr>
            </table>
        </form>
    </body>
</html>
