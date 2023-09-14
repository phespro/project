<?php

namespace App\Actions;

use Phespro\Phespro\NoTee\NoTeeTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexGet
{
    use NoTeeTrait;

    function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return $this->renderResponse('index.php');
    }
}
