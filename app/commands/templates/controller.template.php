<?php
namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PregReplace extends Controller
{
    public function getPregReplace(RequestInterface $request, ResponseInterface $response)
    {
        $params = [];
        $this->render($response, 'pages/home.twig', $params);
    }
}
