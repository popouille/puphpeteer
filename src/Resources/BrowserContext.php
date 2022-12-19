<?php

namespace NigelCunningham\Puphpeteer\Resources;

/**
 * @method \NigelCunningham\Puphpeteer\Resources\Target[] targets()
 * @method \NigelCunningham\Puphpeteer\Resources\Target waitForTarget(callable(\NigelCunningham\Puphpeteer\Resources\Target $x): bool $predicate, array{ timeout: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\Page[] pages()
 * @method bool isIncognito()
 * @method void overridePermissions(string $origin, string[] $permissions)
 * @method void clearPermissionOverrides()
 * @method \NigelCunningham\Puphpeteer\Resources\Page newPage()
 * @method \NigelCunningham\Puphpeteer\Resources\Browser browser()
 * @method void close()
 */
class BrowserContext extends EventEmitter
{
    //
}
