<?php


namespace App;


use League\Route\Router;
use NoTee\NoTeeInterface;
use App\Actions\IndexGet;
use Phespro\Phespro\Extensibility\AbstractExtension;
use Phespro\Phespro\Kernel;
use Psr\Container\ContainerInterface;

class AppExtension extends AbstractExtension
{
    function boot(Kernel $kernel): void
    {
        $kernel->decorate(
            'template_dirs',
            fn (ContainerInterface $c, array $inner) => array_merge($inner, [__DIR__ . '/../template']),
        );

        $kernel->add(
            IndexGet::class,
            fn (ContainerInterface $c) => new IndexGet,
        );
    }

    function bootHttp(Router $router): void
    {
        $router->get(
            '/',
            IndexGet::class,
        );
    }
}
