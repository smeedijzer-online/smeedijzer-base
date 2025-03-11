<?php

/**
 * Plugin Name: Core Functionality Plugin
 * Plugin URI:  https://github.com/smeedijzer-online/smeedijzer-base
 * Description: A plugin that modifies some core functionality of WordPress
 * Version:     0.0.2
 * Author:      Smeedijzer
 * Author URI:  https://github.com/smeedijzer-online
 * Licence:     MIT
 * License URI: https://opensource.org/licenses/MIT
 */

namespace Smeedijzer\Base;
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

// exit if accessed directly...
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Autoloader
 */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    throw new \RuntimeException('Autoloader does not exist.');
}

$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/smeedijzer-online/smeedijzer-base',
    __FILE__,
    'smeedijzer-base'
);

// Optional: Set the branch that contains the stable release.
$updateChecker->setBranch('main');
