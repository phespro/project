<?php


namespace App\Actions;


use Laminas\Diactoros\Response;
use NoTee\NoTeeInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexGet
{
    function __construct(protected NoTeeInterface $noTee) { }

    function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write((string)$this->noTee->render('index.php'));
        return $response;
    }
}