<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 25/01/2017
 * Time: 11:38 PM
 */

require '../vendor/autoload.php';

$data = [
    'name'=>'Nombre',
    'course' => 'nombre del curso'
];
$html = App\Template::render('pdf/certificate',$data);
App\Pdf::render('download',$html);