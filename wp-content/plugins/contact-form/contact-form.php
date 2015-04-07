<?php
/**
 * @package Contact Form
 */

/*
Plugin Name: Contact Form
Plugin URI: http://www.trentnewton.com
Description: A clean and simple contact form custom designed for Nick Riddel.
Version: 9.9.9
Author: Trent Newton
Author URI: http://www.trentnewton.com
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
 * @package Main
*/
include ('shortcodes/contact-form.php');
include ('class.cscf.php');
include ('class.cscf_pluginsettings.php');
include ('class.cscf_settings.php');
include ('class.cscf_contact.php');
include ('class.view.php');
include ('class.cscf_filters.php');
include ('ajax.php');
include ('recaptchalib-1.11.php');

if (!defined('CSCF_THEME_DIR')) define('CSCF_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());

if (!defined('CSCF_PLUGIN_NAME')) define('CSCF_PLUGIN_NAME', 'contact-form');

if (!defined('CSCF_PLUGIN_DIR')) define('CSCF_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . CSCF_PLUGIN_NAME);

if (!defined('CSCF_PLUGIN_URL')) define('CSCF_PLUGIN_URL', WP_PLUGIN_URL . '/' . CSCF_PLUGIN_NAME);

if (!defined('CSCF_VERSION_KEY')) define('CSCF_VERSION_KEY', 'cscf_version');

if (!defined('CSCF_VERSION_NUM')) define('CSCF_VERSION_NUM', '9.9.9');

if (!defined('CSCF_OPTIONS_KEY')) define('CSCF_OPTIONS_KEY', 'cscf_options');

$cscf = new cscf();

/*get the current version and update options to the new option*/
$oldVersion = get_option(CSCF_VERSION_KEY);
update_option(CSCF_VERSION_KEY, CSCF_VERSION_NUM);

/*If this is a new installation then set some defaults*/
if ( $oldVersion == false ) {
    $options = get_option(CSCF_OPTIONS_KEY);
    $options['use_client_validation'] = true;
    $options['load_stylesheet'] = true;
    $options['confirm-email'] = false;
    update_option(CSCF_OPTIONS_KEY,$options);
}