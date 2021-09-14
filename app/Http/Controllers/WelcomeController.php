<?php
namespace app\Http\Controllers;

class WelcomeController
{
    public function index($response)
    {
        $response->getBody()->write('Welcome controller');
        return $response;
    }

    public function show($response, $name, $id)
    {
        $response->getBody()->write("Welcome controller {$name}. Your id is {$id}");
        return $response;
    }

}

?>