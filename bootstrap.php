<?php

namespace App;

use NoTee\NoTeeInterface;
use Phespro\Phespro\Kernel;
use Psr\Container\ContainerInterface;

require __DIR__ . '/vendor/autoload.php';

$kernel = new Kernel([
    AppExtension::class,
]);

$kernel->decorate('config', fn(ContainerInterface $c, callable $prev) => array_replace_recursive($prev(), [
    'debug' => [
        'displayErrorDetails' => true,
    ],
]));

$kernel->get(NoTeeInterface::class)->enableGlobal();
