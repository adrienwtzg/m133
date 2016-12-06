<?php
    $user["admin"] = sha1("Super2012"); //Tableau des users
    $user["prof"] = sha1("Secret");
    $user["eleve"] = sha1("Super");
    $user["eleve2"] = sha1("Super2008");
    $user["lucas"] = sha1("Salut");
    
    $TriUser = isset($_GET["TriUser"]) ? $_GET["TriUser"]: 0;
    $TriPass = isset($_GET["TriPass"]) ? $_GET["TriPass"]: 0;
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tableau User</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        (!boolval($TriUser))?$NextTriUser = 1:$NextTriUser = 0;
        
        (!boolval($TriPass))?$NextTriPass = 1:$NextTriPass = 0;
        
        
        boolval($TriUser) ? ksort($user) : krsort($user);
        boolval($TriPass) ? asort($user) : arsort($user);
        
        echo "<table><tr><th><a href='TableauUser.php?TriUser=$NextTriUser&TriPass=$TriPass'>User</a></th><th><a href='TableauUser.php?TriUser=$TriUser&TriPass=$NextTriPass'>Password</a></th></tr>";
            foreach ($user as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        echo "</table>";
        ?>
        <style>
            table, th,td{
                /* Bordure */
                border: solid 1px #000000;
                border-collapse: collapse;
                
            }
        </style>
    </body>
</html>


