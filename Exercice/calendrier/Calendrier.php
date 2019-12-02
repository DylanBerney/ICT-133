<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" <link href="Calendrier.css">
    <meta charset="UTF-8">
    <title>Calendrier</title>
</head>
<body>
</body>
</html>
<?php
    $compteur = 1;
    $compteur2 = 0;
    $compteur3 = 28;

    echo date("M");
    echo ('<br>');
    for ($ligne = 0; $ligne <5;$ligne++)
    {
        echo("<tr>");
        for ($colonne = 0; $colonne < 7; $colonne++)
        {
            echo("<td>$compteur</td>");
            $compteur++;
            if($compteur == 32)
            {
                $ligne=5;
            }
        }
        echo("</tr>");
    }
    for ($ligne = 0; $ligne <5;$ligne++)
    {
        for ($colonne = 0; $colonne < 7; $colonne++)
        {
            echo $Date[$ligne][$colonne].' ';
        }
     echo ('<br>');
    }
    echo("<br>");

    $ligne = 0;
    $colonne = 0;
    $compteur =1;

    echo'<table>';
    while($ligne <5)
    {
        echo'<tr>';
        while($colonne <7)
        {
            if($compteur % 2 == 0)
            {
                echo("<td class='Tableau'>$compteur</td>");
            }
            else
            {
                echo("<td>$compteur</td>");
            }
            $compteur++;
        }
        echo'</tr>';
        $colonne =0;
        $ligne++;
    }
    echo'</table>';
?>
