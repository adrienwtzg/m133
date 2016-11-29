<?php

function AfficheTableau($lignes, $colonnes) {
    if (($lignes > 0) && ($colonnes > 0)) {
        echo "\n\t<table border='1px, black, solid' borderCollapse='collapse'>";

        for ($l = 0; $l < $lignes; $l++) {
            echo "\n\t\t<tr>";
            for ($c = 0; $c < $colonnes; $c++) {
                if($l == 0){
                    echo "\n\t\t\t<th>" . ($l * $colonnes + $c + 1) . "</th>";
                }
                else{
                    echo "\n\t\t\t<td>" . ($l * $colonnes + $c + 1) . "</td>";
                }
                    
            }
            echo "\n\t\t</tr>";
        }
        echo "\n\t</table>";
    }
}
