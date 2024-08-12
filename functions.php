<?php

/**
 * https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
 * 
 * @param string $class The fully-qualified class name.
 * @return void
 */
function load_class($class)
{
    // plugin directory 
    $plugin_dir = plugin_dir_path(__FILE__);

    // get the relative path class
    $relative_class = str_replace('\\', '/', $class);

    // get the absolute path class
    $file = $plugin_dir . $relative_class . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
};

spl_autoload_register('load_class');
