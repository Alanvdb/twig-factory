<?php declare(strict_types=1);

namespace AlanVdb\Renderer\Definition;

use Twig\Environment as TwigEnvironment;

interface TwigFactoryInterface
{
    public function createRenderer(string $templateDirectory, string $cacheDirectory = null) : TwigEnvironment;
}
