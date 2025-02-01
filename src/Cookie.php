<?php

declare(strict_types=1);

namespace Overclokk\Cookie;

/**
 * @link http://php.net/manual/en/function.setcookie.php
 */
class Cookie implements CookieInterface
{
    /**
     * $_COOKIE global variable
     */
    private array $cookie;

    /**
     * Init class
     *
     * @param array $cookie $_COOKIE global variable.
     */
    public function __construct(array $cookie = [])
    {
        $this->cookie = $cookie === [] ? $_COOKIE : $cookie;
    }

    /**
     * Get the value of a cookie
     *
     * @param string|int $name The cookie name.
     *
     * @return null|string Return the cookie value
     */
    public function get(string|int $name): ?string
    {
        if (! isset($this->cookie[$name])) { // Input var okay.
            return null;
        }

        return \strip_tags(\stripslashes((string) $this->cookie[$name])); // Input var okay.
    }

    /**
     * Set cookie
     *
     * @param string|int $name The cookie name.
     * @param string $value The cookie value.
     * @param int $expire Expiration time in seconds.
     * @param null $path The path on the server in which the cookie will be available on.
     *                         If set to '/', the cookie will be available within the
     *                         entire domain. If set to '/foo/', the cookie will only be
     *                         available within the /foo/ directory and all sub-directories
     *                         such as /foo/bar/ of domain. The default value is the current
     *                         directory that the cookie is being set in.
     * @param null $domain The (sub)domain that the cookie is available to.
     * @param null $secure Indicates that the cookie should only be transmitted over
     *                         a secure HTTPS connection from the client.
     * @param null $httponly When TRUE the cookie will be made accessible only through
     *                         the HTTP protocol.
     *
     * @return bool            If output exists prior to calling this function, setcookie()
     *                         will fail and return FALSE. If setcookie() successfully runs,
     *                         it will return TRUE. This does not indicate whether the
     *                         user accepted the cookie.
     */
    public function set(
        string|int $name,
        $value,
        $expire = 0,
        $path = null,
        $domain = null,
        $secure = null,
        $httponly = null
    ): bool {
        return \setcookie(
            (string) $name,
            (string) $value,
            [
                'expires' => $this->calculateExpirationTime($expire),
                'path' => $path,
                'domain' => $domain,
                'secure' => $secure,
                'httponly' => $httponly,
            ]
        );
    }

    /**
     * Store a cookie for a long, long time.
     *
     * @param string $name  The cookie name.
     * @param string $value The cookie value.
     *
     * @return bool         If output exists prior to calling this function, setcookie()
     *                      will fail and return FALSE. If setcookie() successfully runs,
     *                      it will return TRUE. This does not indicate whether the
     *                      user accepted the cookie.
     */
    public function forever(string|int $name, string $value, $expire = 0): bool
    {
        if ($expire === 0) {
            $expire = 31536000 * 5;
        }

        return $this->set($name, $value, $expire);
    }

    /**
     * Delete a cookie
     *
     * @param string $name Cookie name.
     *
     * @return bool        @see Class::set();
     */
    public function delete(string|int $name): bool
    {
        unset($this->cookie[$name]); // Input var okay.
        return $this->set($name, null, time() - 15 * 60);
    }

    /**
     * Calculate the expiration time
     *
     * @param int $expire The espiration time
     */
    private function calculateExpirationTime(int $expire = 0): int
    {
        return $expire > 0 ? time() + $expire : -1;
    }
}
