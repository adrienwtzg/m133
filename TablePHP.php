<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            define("LIGNES", 3);
            define("COLLONES", 4);
            
            echo "\n\t<table border='1px, black, solid' borderCollapse='collapse'>";
            
            for($l = 0; $l < LIGNES; $l++)
            {
                echo "\n\t\t<tr>";
                for($i = 0; $i < COLLONES; $i++)
                {
                    echo "\n\t\t\t<td>" . ($l * COLLONES + $i + 1) . "</td>";
                }
                echo "\n\t\t</tr>";
            }
            
            echo "\n\t</table>";
        ?>
        <div>
        </div>
    </body>
</html>
