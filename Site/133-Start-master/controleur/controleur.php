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
require "modele/model.php";                 /*Appelle le model*/
function home()                             /*Fonction "home" qui vas afficher l'accueil*/
{
    $_GET['action'] = "home";
    require "view/home.php";
}

function login($post)                       /*Fonction login qui va vérifier si le login est correct ou non et renvoie sur une page en fonction de la réponse*/
{
    $_GET['action'] = "login";

    $email = @$_POST['email'];
    $password = @$_POST['password'];

    if (checkLogin($email, $password) == "true") {                  /*Condition qui test le mot de passe et l'email*/

        $_SESSION['element'] = $post['email'];                       /*Si la fonction retourne true l'utilisateur rt renvoyer sur l'accueil*/
        echo $_SESSION['element'];
        require "view/home.php";

    }
    else
    {
        require "view/login.php";                                    /*Si la fonction retourne false l'utilisateur retombe sur la page de login*/
    }
}
function register()                                                     /*Fonction qui est censer enregistrer les mot de passe et l'email dans une variable*/
{
    $_GET['action'] = "register";
    require "view/register.php";

    $emailRegister = @$_POST['emailRegister'];                              /*Enregistre l'email dans la variable emailRegister*/
    $passwordRegister = @$_POST['passwordRegister'];                        /*Enregistre le ot de passe dans la variable èasswordRegister*/
    require "modele/model.php";                                             /*Appelle le model*/
    registerInfo($emailRegister, $passwordRegister);
}

?>