<?php
require_once '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
//recoger la vista para imprimir
ob_start();
require 'generar.php';
$html = ob_get_clean();

//se escribe para el pdf
$html2pdf->writeHTML($html);
//Sale el pdf
$html2pdf->output('generar.pdf');