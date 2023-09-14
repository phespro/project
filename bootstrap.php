<?php

namespace App;

use NoTee\NoTeeInterface;
use Phespro\Phespro\Configuration\FrameworkConfiguration;
use Phespro\Phespro\Kernel;
use Psr\Container\ContainerInterface;

require __DIR__ . '/vendor/autoload.php';

$kernel = new Kernel([
    AppExtension::class,
]);

$kernel->get(NoTeeInterface::class)->enableGlobal();
