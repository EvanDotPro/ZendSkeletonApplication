<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Just for Thinkscape
define('CONFIG_GLOB', 'config/autoload/{,*.}{global,local}.php');
$files  = Zend\Stdlib\Glob::glob(CONFIG_GLOB, Zend\Stdlib\Glob::GLOB_BRACE);
$config = Zend\Config\Factory::fromFiles($files);

// Run the application!
Zend\Mvc\Application::init($config)->run();
