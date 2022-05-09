<?php

declare(strict_types=1);

namespace PhpStanTwigAnalysis\PhpStan;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

final class TwigFactoryForTesting
{
    public function create(): Environment
    {
        $loader = new FilesystemLoader();
        $loader->addPath(__DIR__ . '/Fixtures');

        $twig = new Environment($loader, [
            'debug' => true,
        ]);
        $twig->addExtension(new DebugExtension());

        return $twig;
    }
}
