<?php

  class Controller {
    public static function CreateView($viewName) {
      if(file_exists("./views/".$viewName.".view.php")) {
        require_once("./views/".$viewName.".view.php");
      }
    }
  }

?>
