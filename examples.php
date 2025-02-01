<?php

declare(strict_types=1);

namespace Overclokk\Cookie;

require(__DIR__ . '/vendor/autoload.php');

$cookieName = 'cookie_name';
$_COOKIE[$cookieName] = 'cookie_value';

$cookie = new Cookie($_COOKIE);
$getCookieValue = $cookie->get($cookieName);

$cookie->set($cookieName, 'new_cookie_value');
$secondGetCookieValue = $cookie->get($cookieName);

\var_dump($getCookieValue === $_COOKIE[$cookieName]);
\var_dump($secondGetCookieValue === $_COOKIE[$cookieName]);
