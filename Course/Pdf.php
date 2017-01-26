<?php namespace App;

/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 25/01/2017
 * Time: 11:47 PM
 */
class Pdf
{

    protected static $configured = false;

    public static function configure()
    {
        if(static::$configured) return;
        define('DOMPDF_ENABLE_AUTOLOAD',false);
        static::$configured = true;
    }
    public static function render($file,$html)
    {
        self::configure();

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("$file.pdf");

    }

    
}