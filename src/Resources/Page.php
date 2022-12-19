<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Puphpeteer\Traits\AliasesSelectionMethods;
use NigelCunningham\Puphpeteer\Traits\AliasesEvaluationMethods;

/**
 * @property-read \NigelCunningham\Puphpeteer\Resources\Keyboard keyboard
 * @property-read \NigelCunningham\Puphpeteer\Resources\Touchscreen touchscreen
 * @property-read \NigelCunningham\Puphpeteer\Resources\Coverage coverage
 * @property-read \NigelCunningham\Puphpeteer\Resources\Tracing tracing
 * @property-read \NigelCunningham\Puphpeteer\Resources\Accessibility accessibility
 * @property-read \NigelCunningham\Puphpeteer\Resources\Mouse mouse
 * @method bool isJavaScriptEnabled()
 * @method \NigelCunningham\Puphpeteer\Resources\FileChooser waitForFileChooser(array<string, mixed> $options = null)
 * @method void setGeolocation(array<string, mixed> $options)
 * @method \NigelCunningham\Puphpeteer\Resources\Target target()
 * @method \NigelCunningham\Puphpeteer\Resources\Browser browser()
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext browserContext()
 * @method \NigelCunningham\Puphpeteer\Resources\Frame mainFrame()
 * @method \NigelCunningham\Puphpeteer\Resources\Frame[] frames()
 * @method \NigelCunningham\Puphpeteer\Resources\WebWorker[] workers()
 * @method void setRequestInterception(bool $value)
 * @method void setOfflineMode(bool $enabled)
 * @method void setDefaultNavigationTimeout(float $timeout)
 * @method void setDefaultTimeout(float $timeout)
 * @method mixed evaluateHandle(callable|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle queryObjects(\NigelCunningham\Puphpeteer\Resources\JSHandle $prototypeHandle)
 * @method mixed[] cookies(string ...$urls)
 * @method void deleteCookie(mixed ...$cookies)
 * @method void setCookie(mixed ...$cookies)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle addScriptTag(array{ url: string, path: string, content: string, type: string } $options)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle addStyleTag(array{ url: string, path: string, content: string } $options)
 * @method void exposeFunction(string $name, callable $puppeteerFunction)
 * @method void authenticate(mixed $credentials)
 * @method void setExtraHTTPHeaders(array<string, string> $headers)
 * @method void setUserAgent(string $userAgent)
 * @method mixed metrics()
 * @method string url()
 * @method string content()
 * @method void setContent(string $html, array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse goto(string $url, array<string, mixed>&array{ referer: string } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null reload(array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null waitForNavigation(array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPRequest waitForRequest(string|callable $urlOrPredicate, array{ timeout: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse waitForResponse(string|callable $urlOrPredicate, array{ timeout: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null goBack(array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null goForward(array<string, mixed> $options = null)
 * @method void bringToFront()
 * @method void emulate(array{ viewport: mixed, userAgent: string } $options)
 * @method void setJavaScriptEnabled(bool $enabled)
 * @method void setBypassCSP(bool $enabled)
 * @method void emulateMediaType(string $type = null)
 * @method void emulateMediaFeatures(mixed[] $features = null)
 * @method void emulateTimezone(string $timezoneId = null)
 * @method void emulateIdleState(array{ isUserActive: bool, isScreenUnlocked: bool } $overrides = null)
 * @method void emulateVisionDeficiency(mixed $type = null)
 * @method void setViewport(mixed $viewport)
 * @method mixed|null viewport()
 * @method mixed evaluate(mixed $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method void evaluateOnNewDocument(callable|string $pageFunction, mixed ...$args)
 * @method void setCacheEnabled(bool $enabled = null)
 * @method mixed|string|null screenshot(array<string, mixed> $options = null)
 * @method mixed pdf(array<string, mixed> $options = null)
 * @method string title()
 * @method void close(array{ runBeforeUnload: bool } $options = null)
 * @method bool isClosed()
 * @method void click(string $selector, array{ delay: float, button: mixed, clickCount: float } $options = null)
 * @method void focus(string $selector)
 * @method void hover(string $selector)
 * @method string[] select(string $selector, string ...$values)
 * @method void tap(string $selector)
 * @method void type(string $selector, string $text, array{ delay: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle waitFor(string|float|callable $selectorOrFunctionOrTimeout, array{ visible: bool, hidden: bool, timeout: float, polling: string|float } $options = null, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method void waitForTimeout(float $milliseconds)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle|null waitForSelector(string $selector, array{ visible: bool, hidden: bool, timeout: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle|null waitForXPath(string $xpath, array{ visible: bool, hidden: bool, timeout: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle waitForFunction(callable|string $pageFunction, array{ timeout: float, polling: string|float } $options = null, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 */
class Page extends EventEmitter
{
    use AliasesSelectionMethods, AliasesEvaluationMethods;
}
