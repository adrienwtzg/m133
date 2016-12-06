<?php
    $user["admin"] = sah1("Super2012"); //Tableau des users
    $user["prof"] = sah1("Secret");
    $user["eleve"] = sah1("Super");
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
        echo "<table><tr><th>User</th><th>Password</th></tr>";
            foreach ($user as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</table>"
        ?>
    </body>
</html>


