<?php
/**
 * Index.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 16.12.2019 14:23
 */

require "controleur/controleur.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'contact' :
            contact();
            break;
        case 'login':
            login(@$_POST);
            break;
        case 'register':
            register(@$_POST);
            break;
        default :
            home();
    }
}
else
{
    home();
}
?>