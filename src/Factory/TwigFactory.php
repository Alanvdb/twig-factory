<?php declare(strict_types=1);

namespace AlanVdb\Renderer\Factory;

use AlanVdb\Renderer\Definition\TwigFactoryInterface;
use Twig\Loader\FilesystemLoader as TwigFilesystemLoader;
use Twig\Environment as TwigEnvironment;

class TwigFactory implements TwigFactoryInterface
{
    public function createRenderer(string $templateDirectory, string $cacheDirectory = null) : TwigEnvironment
    {
        $twigLoader = new TwigFilesystemLoader($templateDirectory);
        $options = [];

        if ($cacheDirectory !== null) {
            $options['cache'] = $cacheDirectory;
        }
        return new TwigEnvironment($twigLoader, $options);
    }
}
