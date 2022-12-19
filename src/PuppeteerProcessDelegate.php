<?php

namespace NigelCunningham\Puphpeteer;

use NigelCunningham\Rialto\Traits\UsesBasicResourceAsDefault;
use NigelCunningham\Rialto\Interfaces\ShouldHandleProcessDelegation;

class PuppeteerProcessDelegate implements ShouldHandleProcessDelegation
{
    use UsesBasicResourceAsDefault;

    /**
     * {@inheritDoc}
     */
    public function resourceFromOriginalClassName(string $className): ?string
    {
        $class = "NigelCunningham\\Puphpeteer\\Resources\\$className";

        return class_exists($class) ? $class : null;
    }
}
