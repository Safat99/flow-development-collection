<?php
declare(strict_types=1);

namespace Neos\Http\Factories;

use GuzzleHttp\Psr7\Uri as UriImplementation;
use Neos\Flow\Http\Uri as UriDecorator;
use Psr\Http\Message\UriInterface;

/**
 *
 */
trait UriFactoryTrait
{
    /**
     * @inheritDoc
     */
    public function createUri(string $uri = ''): UriInterface
    {
        return UriDecorator::decorate(new UriImplementation($uri));
    }
}
