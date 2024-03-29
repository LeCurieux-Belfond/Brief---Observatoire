<?php

require_once __DIR__ . "/Controller/loginController.php";

$homeController = new HomeController();
// $espacePersonnalController = new PersonnalSpaceController();
$loginController = new LoginController();
// $inscriptionController = new InscriptionController();

$route = $_SERVER['REQUEST_URI'];

$method = $_SERVER['REQUEST_METHOD'];
print_r($route);


switch ($route) {
    case URL_HOMEPAGE:
        $homeController->index();
        break;

    case URL_LOGIN:

        if ($method ==='POST') {
            $loginController->post_login();
        }
        
        if ($method === 'GET') {
            $loginController->login();

        }
        break;

    // case URL_INSCRIPTION:
    //     $inscriptionController->index();
    //     break;

    // case URL_PERSONALSPACE:
    //     $espacePersonnelController->index();
    //     break;

    default:
        $homeController->pageNotFound();
}


?>

// Charge les fichiers des classes des contrôleurs.
require __DIR__ . "/Controllers/HomeController.php";
require __DIR__ . "/Controllers/StudentController.php";