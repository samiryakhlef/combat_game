<?php

require 'src/Autoloader.php';

Autoloader::register();
Test::test();



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$test = new Test();

