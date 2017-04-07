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
        echo <<<END
        'Текст' написанный "echo" $text .<br>
END;
        echo 'Вы говорите ',(is_null($text))?'ни чего не говорите':$text, '<br>';
        // TODO: Это я говорю.
        print $text.'<br>';
    }
}

$iSend = MySendText::init();
$iSend->get();