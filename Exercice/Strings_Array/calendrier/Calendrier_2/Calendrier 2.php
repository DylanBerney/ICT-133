<!DOCTYPE html>                                     <! -- Code html et CSS du calendrier
                                                    Calendrier 2.php

                                                    Auhor: Dylan.BERNEY
                                                    Vers:1.0
                                                    Date: 25.11.2019 15:46      -->
<html>
    <link rel="stylesheet" <link href="Calendrier2.css">
<head>
</head>
<body>
<h1>CSS Calendar</h1>


<?php
/**
 * Calendrier 2.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 25.11.2019 15:46
 */

$TableauJour = array (
            'Lundi' => 'Lun',
            'Mardi' => 'Mar',
            'Mercredi' => 'Mer',
            'Jeudi' => 'Jeu',
            'Vendredi' => 'Ven',
            'Samedi' => 'Sam',
            'Dimanche' => 'Dim'
    );

$TableauMonth = array (
        'Janvier',
        'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
        'Août',
        'Septembre',
        'Octobre',
        'Novembre',
        'Décembre');

echo ("<div class='month'><ul><li class=\"prev\">&#10094;</li>");
echo ("<li class=\"next\">&#10095;</li>");
echo ("<li>").$TableauMonth[date("m" )-1].("<br><span style=\"font-size:18px\">").date("o").("</span></li></ul></div>");
echo ('<ul class="weekdays">');
foreach ($TableauJour as $TableauJours)
    {
        echo ("<li>$TableauJours</li>");
    }
echo ('</ul>');
$compteur =1;                                   /*Initialisation des variables*/
echo("<ul class='days'>");                           /*Ouvre le ul qui signifie le début du calendrier*/
for ($i = 1; $i < 8 - date("N"); $i++) {
    echo '<li></li>';
}
for ($ligne = 0; $ligne <5;$ligne++)                /*Boucle for qui fait boucler à chaque ligne*/
{
    for ($colonne = 0; $colonne < 7; $colonne++)        /*Boucle for qui fait boucler jusqu'a 7 fois*/
    {
        if($compteur == date("j"))
        {
            echo("<li class='Actif'>$compteur</li>");                     /*Affiche la variable avec la date à l'intérieur*/
        }
        else{
            echo("<li>$compteur</li>");                     /*Affiche la variable avec la date à l'intérieur*/
        }
        $compteur++;                                    /*Ajoute 1 à la variable afin que sa ne soit jamais la même*/
        if($compteur == date("t")+1)                             /*Condition pour que la boucle s'arrête à la 31 date*/
        {
            $colonne = 7;
        }
    }
}
echo("</ul>");                                            /*Ferme le ul qui signifie la fin du calendrier*/




?>
<a><</a>
<a methods="">></a>
</body>
</html>