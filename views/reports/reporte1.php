<?php

//require __DIR__.'/vendor/autoload.php'; //ABSOLUTO
//require __DIR__.'../../vendor/autoload.php';//RELATIVO

require_once '../../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf=new Html2Pdf();
$html2pdf->writeHTML('<h1>hello world</h1> This is my first test');
$html2pdf->output();
