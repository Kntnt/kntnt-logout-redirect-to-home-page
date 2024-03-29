<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Logout Redirect to Home Page
 * Plugin URI:        https://github.com/Kntnt/kntnt-logout-redirect-to-home-page
 * Description:       Redirects users to front page on logout.
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_action( 'wp_logout', function () {
  wp_safe_redirect( home_url() );
  exit;
});
