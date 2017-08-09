<?php

declare(strict_types=1);

namespace Icosillion\SlimControllers\Http;

/**
 * Request
 *
 * This class represents an HTTP request. It manages
 * the request method, URI, headers, cookies, and body
 * according to the PRS-7 standard.
 *
 * @link https://github.com/php-fig/http-message/blob/master/src/MessageInterface.php
 * @link https://github.com/php-fig/http-message/blob/master/src/RequestInterface.php
 * @link https://github.com/php-fig/http-message/blob/master/src/ServerRequestInterface.php
 */
class Request extends \Slim\Http\Request
{
    /**
     * Get a cookie, or a default value if not set
     *
     * @param string $name Name of the cookie
     * @param string $defaultValue If none exist, use this value
     * @return string
     */
    public function getCookie(string $name, ?string $defaultValue = null): string
    {
        $cookies = $this->getCookieParams();

        return $cookies[$name] ?? $defaultValue;
    }
}
