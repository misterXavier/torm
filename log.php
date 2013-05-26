<?php
namespace TORM;

class Log {
   private static $enabled = false;

   public static function isEnabled() {
      return self::$enabled;
   }

   public static function enable($status) {
      self::$enabled = $status;
   }

   public static function log($msg) {
      echo "log: $msg\n";
   }
}
