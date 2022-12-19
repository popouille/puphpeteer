<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Rialto\Data\BasicResource;

/**
 * @method \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method mixed evaluate(mixed|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle|\NigelCunningham\Puphpeteer\Resources\ElementHandle evaluateHandle(callable|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle|null getProperty(string $propertyName)
 * @method array<string, \NigelCunningham\Puphpeteer\Resources\JSHandle> getProperties()
 * @method array<string, mixed> jsonValue()
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle|null asElement()
 * @method void dispose()
 * @method string toString()
 */
class JSHandle extends BasicResource
{
    //
}
