<?php


namespace App;


use League\Route\Router;
use NoTee\NoTeeInterface;
use Phespro\Container\Container;
use Phespro\Phespro\LazyActionResolver;
use Phespro\Phespro\PluginInterface;
use App\Actions\IndexGet;

class AppPlugin implements PluginInterface
{
    function __construct(private LazyActionResolver $lazyActionResolver)
    {
    }

    static function getPluginFactoryFunction(): callable
    {
        return fn(Container $c) => new static($c->get(LazyActionResolver::class));
    }

    function initializeContainer(Container $container): void
    {
        $container->decorate('template_dirs', fn(Container $container, callable $prev) => array_merge($prev(), [__DIR__ . '/template']));
        $container->add(IndexGet::class, fn(Container $c) => new IndexGet($c->get(NoTeeInterface::class)));
    }

    function initializeWeb(Router $router): void
    {
        $router->get('/', $this->lazyActionResolver->wrapService(IndexGet::class));
    }
}