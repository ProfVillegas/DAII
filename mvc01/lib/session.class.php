<?php
class Session{
    protected static $flash_message;
    
    public static function setFlash($msg){
        self::$flash_message=$msg;
    }
    
    public static function hasFlash(){
        return !is_null(self::$flash_message);
    }
    
    public static function flash(){
        echo self::$flash_message;
        self::$flash_message=null;
    }
}