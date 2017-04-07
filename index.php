<?php
abstract class SendText{
    abstract function get($text);
}

class MySendText extends SendText{
    private static $init = null;

    private function __construct(){
        print "Привет всем!<br>";
    }
    static function init(){
        if (is_null(self::$init)){
            self::$init = new self();
        }
        return self::$init;
    }

    function get($text = 'и тишина...')
    {
        // TODO: Это я говорю.
        print $text;
    }
}

$iSend = MySendText::init();
$iSend->get();