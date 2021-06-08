<?php
function autoload($name) {
    $configPath = "config";
    $currentPath = str_replace("\\", "/", __DIR__);
    $myClass = strtolower($name);
    $classPath = str_replace("\\", "/", $name);
    $projectPath = str_replace($configPath, "", $currentPath);
    $finalPath = $projectPath . "" . $classPath . ".php";
    require($finalPath);
}

spl_autoload_register("autoload");

