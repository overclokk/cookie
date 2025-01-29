<?php

declare(strict_types=1);

namespace Overclokk\Cookie;

require(__DIR__ . '/vendor/autoload.php');

$cookieName = 'cookie_name';
$_COOKIE[$cookieName] = 'cookie_value';

$cookie = new Cookie($_COOKIE);
$cookieValue = $cookie->get($cookieName);

\var_dump($cookieValue === $_COOKIE[$cookieName]);
