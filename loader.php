<?php

spl_autoload_register(function($class_name){

  $class_file = str_replace(
    '\\','/', __DIR__ . DIRECTORY_SEPARATOR . $class_name . '.php'
  );

  if(!file_exists($class_file)){
    return;
  }

  require_once $class_file;

});