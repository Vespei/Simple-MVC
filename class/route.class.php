<?php

  class Route {

    public static $validRoutes = array();

    public static function set($route, $function) {

      self::$validRoutes[] = $route;

      if($_GET['return'] == $route) {
        $function->__invoke();
      } else {
        echo "Route not found";
      }


    }

  }

 ?>
