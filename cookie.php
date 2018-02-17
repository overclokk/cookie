<?php
/**
 * Plugin Name: Cookie
 * Description: Light and simple Cookie Manager API Class
 * Plugin URI: http://www.overclokk.net
 * Author: Enea Overclokk
 * Author URI: http://www.overclokk.net
 * Version: 1.0.2
 * License: GPL-2.0+
 * Text Domain: cookie
 * Domain Path: cookie
 */

/*

    Copyright (C) 2017  Enea Overclokk  info@overclokk.net

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * This file does nothing, the only purpose is to test in a WordPress enviroment, load it with composer in your project instead.
 */
// require( __DIR__ . '/src/Cookie.php' );
// require( __DIR__ . '/src/Cookie_Interface.php' );

require( __DIR__ . '/vendor/autoload.php' );

$cookie = new \Overclokk\Cookie\Cookie( $_COOKIE );

$cookie_name = 'cookie_name';

$cookie_value = $cookie->get( $cookie_name );

var_dump( $cookie_value === $_COOKIE[ $cookie_name ] );
