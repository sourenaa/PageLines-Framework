<?php
/**
 * FUNCTIONS / THEME INITIALIZATION
 *
 * This file loads the core framework which handles everything.
 *
 * @package     PageLines Framework
 * @since       1.0
 *
 * @link        http://www.pagelines.com/
 * @link        http://www.pagelines.com/tour
 *
 * @author      PageLines   http://www.pagelines.com/
 * @copyright   Copyright (c) 2008-2012, PageLines  hello@pagelines.com
 *
 * @internal    last revised January 20, 2012
 * @version     ...
 *
 * @todo Define version
 */
if (version_compare(PHP_VERSION, '5.4.0') >= 0) {
	error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING);
}
require_once(get_template_directory() . '/includes/init.php');