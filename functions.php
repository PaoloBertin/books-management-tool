<?php

function load_includes($class_name)
{
    $path_to_file = 'includes/' . $class_name . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

function load_admin($class_name)
{
    $path_to_file = 'admin/' . $class_name . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

function load_public($class_name)
{
    $path_to_file = 'public/' . $class_name . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

spl_autoload_register('load_includes');
spl_autoload_register('load_admin');
spl_autoload_register('load_public');
