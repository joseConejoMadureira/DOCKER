<?php

class LogsW
{

    public  static function write($message)
    {
        $file = fopen('logs.log', 'a+');
        $text = " ";
        $text .=  "### data log ---> " . date('d/m/y H:i:s');
        $text .= "  >>>>> : " . $message . "  >>>>> #";
        $text .= PHP_EOL;
        fwrite($file, $text);
        fclose($file);
    }
}
