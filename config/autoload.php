<?php
function autoload($class_name)
{
    $class_name = str_replace('\\', '/', $class_name);
    if (file_exists(PATH_SITE . "/" . $class_name . ".php")) {
        include_once(PATH_SITE . "/" . $class_name . ".php");
    } else {
        header("HTTP/1.0 404 Not found");
        echo "К сожалению я вымысел. [" . PATH_SITE . $class_name . ".php ]";
        exit;
    }
}
spl_autoload_register('autoload');