<?php
session_start();
/**
 * controleur.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 16.12.2019 14:41
 */

/** Fonction qui redirge l'utilisateur sur la page d'accueil*/
require "modele/model.php";
function home()
{
    $_GET['action'] = "home";
    require "view/home.php";
}

function login($post)
{
    $_GET['action'] = "login";

    $email = @$_POST['email'];
    $password = @$_POST['password'];


    if (checkLogin($email, $password) == "true") {

        $_SESSION['element'] = $post['email'];
        echo $_SESSION['element'];
        require "view/home.php";

    }
    else
    {
        require "view/login.php";
    }
}
function register()
{
    $_GET['action'] = "register";
    require "view/register.php";

    $emailRegister = @$_POST['emailRegister'];
    $passwordRegister = @$_POST['passwordRegister'];
    require "modele/model.php";
    registerInfo($emailRegister, $passwordRegister);
}

?>