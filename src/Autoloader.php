<?php

ConnectWisePSA_SDK_Autoloader::register();
class ConnectWisePSA_SDK_Autoloader {

    public static function register() {
      if( function_exists('__autoload') ){
        spl_autoload_register('__autoload');
      }
      if( version_compare(PHP_VERSION, '5.3.0') >= 0 ){
        return spl_autoload_register(array('ConnectWisePSA_SDK_Autoloader', 'load'), true, true);
      }
      else {
        return spl_autoload_register(array('ConnectWisePSA_SDK_Autoloader', 'load'));
      }
    }

    public static function load( $className ){
      if( !class_exists($className, false) && strpos($pClassName, 'LabtechSoftware') === 0 ){
        $className = ltrim($className, '\\');
        $fileName  = '';
        $namespace = '';
        if( $lastNsPos = strripos($className, '\\') ){
          $namespace = substr($className, 0, $lastNsPos);
          $className = substr($className, $lastNsPos + 1);
          $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        $filePath = dirname(__FILE__).'/ConnectWisePSA-SDK/src/'.$fileName;
        if( is_file($filePath) === true ){
          require_once $filePath;
        }
      }
    }

}
