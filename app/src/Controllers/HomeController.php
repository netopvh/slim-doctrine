<?php
namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController extends Controller
{
    public function getHome(RequestInterface $request, ResponseInterface $response)
    {
        // Exemple session helper
        if (!$this->session->has('user')) {
            $this->session->set('user', 'John');
        }
        $user = $this->session->get('user');

        // Exemple doctrine
        $users = $this->em->getRepository('App\Entity\User')->queryGetUsers();

        $title = "Hello World!";

        // Exemple monolog
        if (isset($title) && $title === "Hello World!") {
            $this->logger->addInfo("Message de bienvenue envoyé");
        } else {
            $title = "Nop";
        }

        // Exemple d'alerte
        $this->alert(["Ceci est un message d'alerte de test"], 'danger');

        $params = compact("title", "users", "user");
        $this->render($response, 'pages/home.twig', $params);
    }

    public function postHome(RequestInterface $request, ResponseInterface $response)
    {
        return $this->redirect($response, 'home');
    }
}
