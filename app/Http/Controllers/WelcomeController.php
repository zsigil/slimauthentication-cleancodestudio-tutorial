<?php
namespace app\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class WelcomeController
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write('Welcome controller');
        return $response;
    }

}

?>