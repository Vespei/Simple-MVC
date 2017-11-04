<?php

function autoLoaderInclude($includeName){
    if(file_exists(strtolower('./class/'.$includeName.'.class.php'))) {
      $pathClass = strtolower('./class/'.$includeName.'.class.php');
      require_once($pathClass);
    }
    if(file_exists(strtolower('./controllers/'.$includeName.'.php'))) {
      $pathController = strtolower('./controllers/'.$includeName.'.php');
      require_once($pathController);
    }
}


spl_autoload_register('autoLoaderInclude');

?>
