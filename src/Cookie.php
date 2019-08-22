<?php

declare(strict_types=1);

namespace Deviantintegral\Har;

use Deviantintegral\Har\SharedFields\CommentTrait;
use Deviantintegral\Har\SharedFields\ExpiresTrait;
use Deviantintegral\Har\SharedFields\NameValueTrait;
use JMS\Serializer\Annotation as Serializer;

/**
 * @see http://www.softwareishard.com/blog/har-12-spec/#cookies
 */
final class Cookie
{
    use CommentTrait;
    use ExpiresTrait;
    use NameValueTrait;

    /**
     * The name of the cookie.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $cookie;

    /**
     * The path pertaining to the cookie.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $path;

    /**
     * The host of the cookie.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $domain;

    /**
     * Set to true if the cookie is HTTP only, false otherwise.
     *
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $httpOnly;

    /**
     * True if the cookie was transmitted over ssl, false otherwise.
     *
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $secure;

    /**
     * @return string
     */
    public function getCookie(): string
    {
        return $this->cookie;
    }

    /**
     * @param string $cookie
     *
     * @return Cookie
     */
    public function setCookie(string $cookie): self
    {
        $this->cookie = $cookie;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return Cookie
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     *
     * @return Cookie
     */
    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasHttpOnly(): bool
    {
        return null === $this->httpOnly;
    }

    /**
     * @return bool
     */
    public function isHttpOnly(): bool
    {
        return $this->httpOnly;
    }

    /**
     * @param bool $httpOnly
     *
     * @return Cookie
     */
    public function setHttpOnly(bool $httpOnly): self
    {
        $this->httpOnly = $httpOnly;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasSecure(): bool
    {
        return null === $this->secure;
    }

    /**
     * @return bool
     */
    public function isSecure(): bool
    {
        return $this->secure;
    }

    /**
     * @param bool $secure
     *
     * @return Cookie
     */
    public function setSecure(bool $secure): self
    {
        $this->secure = $secure;

        return $this;
    }
}