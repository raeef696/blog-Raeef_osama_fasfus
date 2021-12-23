<?php

spl_autoload_register("autoload");


function autoload($className)
{
    $path = "classes/";
    $ext = ".class.php";
    $file = $path . $className . $ext;


    if(!file_exists($file))
    {
        return false;
    }

    include_once $file;
}

?>