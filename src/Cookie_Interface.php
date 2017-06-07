<?php
/**
 * Cookie Interface API
 *
 * The contract for the Cookie API
 *
 * @link www.overclokk.met
 * @since 1.0.0
 *
 * @package Overclokk\Cookie
 */

namespace Overclokk\Cookie;

interface Cookie_Interface {

	/**
	 * Get the value of a cookie
	 *
	 * @param string $name The cookie name.
	 *
	 * @return null|string Return the cookie value
	 */
	public function get( $name );

	/**
	 * Set cookie
	 *
	 * @param string $name     The cookie name.
	 * @param string $value    The cookie value.
	 * @param int    $expire   Expiration time in seconds.
	 * @param string $path     The path on the server in which the cookie will be available on.
	 *                         If set to '/', the cookie will be available within the
	 *                         entire domain. If set to '/foo/', the cookie will only be
	 *                         available within the /foo/ directory and all sub-directories
	 *                         such as /foo/bar/ of domain. The default value is the current
	 *                         directory that the cookie is being set in. 
	 * @param string $domain   The (sub)domain that the cookie is available to.
	 * @param bool   $secure   Indicates that the cookie should only be transmitted over
	 *                         a secure HTTPS connection from the client.
	 * @param bool   $httponly When TRUE the cookie will be made accessible only through
	 *                         the HTTP protocol.
	 *
	 * @return bool            If output exists prior to calling this function, setcookie()
	 *                         will fail and return FALSE. If setcookie() successfully runs,
	 *                         it will return TRUE. This does not indicate whether the
	 *                         user accepted the cookie. 
	 */
	public function set( $name, $value, $expire = 0, $path = null, $domain = null, $secure = null, $httponly = null );

	/**
	 * Delete a cookie
	 *
	 * @param string $name Cookie name.
	 *
	 * @return bool        @see Interface::set();
	 */
	public function delete( $name );
}
