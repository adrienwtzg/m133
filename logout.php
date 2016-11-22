<?php
    session_start(); // Démarre la session
    
    $login = $_SESSION["login"]; // Récupère la variable login de la session
    $pass = $_SESSION["pass"]; // Récupère la variable pass de la session
    
    if ($login == "" && $pass == "") {  // Vérifie qu le login et le pass sient remplis
        header("location: /formulaire.php"); // Redirige vers le fomurlaire 
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <pre>
            <?php
                echo "<h1>Bienvenue " . $login . " !</h1>";
            ?>
        </pre>
        <form method="POST" action="formulaire.php">
            <input type="submit" value="Log Out" />
        </form>
    </body>
</html>


