<?php

namespace NigelCunningham\Puphpeteer\Resources;

/**
 * @method mixed|null process()
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext createIncognitoBrowserContext()
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext[] browserContexts()
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext defaultBrowserContext()
 * @method string wsEndpoint()
 * @method \NigelCunningham\Puphpeteer\Resources\Page newPage()
 * @method \NigelCunningham\Puphpeteer\Resources\Target[] targets()
 * @method \NigelCunningham\Puphpeteer\Resources\Target target()
 * @method \NigelCunningham\Puphpeteer\Resources\Target waitForTarget(callable(\NigelCunningham\Puphpeteer\Resources\Target $x): bool $predicate, array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\Page[] pages()
 * @method string version()
 * @method string userAgent()
 * @method void close()
 * @method void disconnect()
 * @method bool isConnected()
 */
class Browser extends EventEmitter
{
    //
}
