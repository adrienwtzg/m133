<?php
    $user["admin"] = sha1("Super2012"); //Tableau des users
    $user["prof"] = sha1("Secret");
    $user["eleve"] = sha1("Super");
    
    $TriUser = isset($_GET["TriUser"]) ? $_GET["TriUser"] : false;
    $TriPass = isset($_GET["TriPass"]) ? $_GET["TriPass"] : false;
    
    
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
        $NextTriUser ? $TriUser = false : $TriUser = true;
        $NextTriPass ? $TriPass = false : $TriPass = true;
        $TriUser ? ksort($user) : krsort($user);
        $TriPass ? asort($user) : arsort($user);
        echo "<table><tr><a href='TableauUser.php?TriUser=$NextTriUser&TriPass=$TriPass'><th>User</th></a><a href='TableauUser.php?TriUser=$TriUser&TriPass=$NextTriPass'><th>Password</th></a></tr>";
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


