<?php
    require 'libs/Config.php';
    $config= Config::singleton();
    $config->set('controllerFolder','controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
    $config->set('dbhost', '163.178.107.10'); // ip o localhost
    $config->set('dbname', 'if7103_b60315');
    $config->set('dbuser', 'laboratorios');
    $config->set('dbpass', 'KmZpo.2796');
    
?>

