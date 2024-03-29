<?php
require_once __DIR__ . "/../services/response.php";

class LoginController
{
    use Response;

    public function index()
    {
        $title = "Vous pouvez réserver votre place!";

        $viewData = [
            'title' => $title
        ];

        $this->render('loginTemplate', $viewData);
    }

    public function post_login()
    {
        if (isset($_POST) && !empty($_POST)) {
            // Récupération des données du formulaire
            
            $motdepasse = htmlspecialchars($_POST['motdepasse']);
            $mail = htmlspecialchars($_POST['mail']);

            // Vérification des champs vides
            if (empty($motdepasse)   || empty($mail)) {
                echo "Un ou plusieurs champs sont vides.";
                // Redirection vers la page de connexion avec un message d'erreur
                $this->render("loginTemplate");
                return; // Terminer l'exécution de la méthode
            }

            // Instanciation du repository de connexion

            // Appel de la méthode du repository pour créer une connexion
            // Assurez-vous de passer les données correctement en fonction de votre logique
            // $connexionRepository->create($nom, $prenom, $motDePasse, $email);

            // Redirection vers une autre page après la création de la connexion
            // Remplacez 'liste-reservations' par l'URL de votre choix
            $this->render('loginTemplate');
        }
    }
}