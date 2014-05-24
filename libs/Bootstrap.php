<?php
if (version_compare(PHP_VERSION, '5.3') < 0) {
    echo 'We need PHP 5.3 or higher, you are running ' . PHP_VERSION;
    exit;
}

/**
 * Register Globals Fix
 **/
if (ini_get('register_globals')) {
    $sg = array($_REQUEST, $_SERVER, $_FILES);

    if (isset($_SESSION)) {
        array_unshift($sg, $_SESSION);
    }

    foreach ($sg as $global) {
        foreach (array_keys($global) as $key) {
            unset(${$key});
        }
    }
}

/**
 * Magic Quotes Fix
 **/
if (get_magic_quotes_gpc()) {
    $gpc = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);

    array_walk_recursive($gpc, function (&$value) {
        $value = stripslashes($value);
    });
}

require APP.DS.'libs'. DS . 'ClassLoader' . EXT;
require APP.DS.'libs'. DS . 'Config' . EXT;
//*
// spl_autoload_register(array('Run\\ClassLoader', 'load'));
Run\ClassLoader::$aliases = Run\Config::aliases();
Run\ClassLoader::addDirectories(APP);
Run\ClassLoader::register();
//*/
