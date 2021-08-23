<?php

namespace App\Actions;

use Phespro\Phespro\Http\AbstractAction;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexGet extends AbstractAction
{
    function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return $this->render('index.php');
    }
}
