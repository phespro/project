<?php

namespace App;

use NoTee\NoTeeInterface;
use Phespro\Phespro\Kernel;

require __DIR__ . '/vendor/autoload.php';

$kernel = new Kernel;
$kernel->addPlugin(AppPlugin::class);
$container = $kernel->getContainer();

$container->decorate('config', fn($container, $prev) => array_replace_recursive($prev(), [
    'debug' => [
        'displayErrorDetails' => true,
    ]
]));

$container->get(NoTeeInterface::class)->enableGlobal();