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
    echo("<table>");
    for ($ligne = 0; $ligne <5;$ligne++)
    {
        echo("<tr>");
        for ($colonne = 0; $colonne < 7; $colonne++)
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
            if($compteur == 32)
            {
                $colonne = 7;
            }
        }
        echo("</tr>");
    }
    echo("</table>");
?>
