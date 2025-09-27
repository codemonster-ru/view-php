<?php

declare(strict_types=1);

namespace Codemonster\View\Engines;

use Codemonster\View\EngineInterface;
use Codemonster\View\Locator\LocatorInterface;

final class PhpEngine implements EngineInterface
{
    public function __construct(
        private readonly LocatorInterface $locator,
        private readonly string|array $extensions = 'php'
    ) {
    }

    public function render(string $name, array $data = []): string
    {
        $file = $this->locator->resolve($name, $this->extensions);

        $render = static function (string $__file, array $__data): string {
            extract($__data, EXTR_SKIP);
            ob_start();

            try {
                include $__file;
            } finally {
                $out = ob_get_clean();
            }

            return $out === false ? '' : $out;
        };

        return $render($file, $data);
    }
}
