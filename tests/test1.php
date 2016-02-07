<?php
/**
 * 
 * 
 */

//
error_reporting(E_ALL);

//
ini_set('display_errors', 1);

//
require_once '../../../autoload.php';

//
use Javanile\LightPDF\mPDF;

//
$pdf = new mPDF();

//
$pdf->WriteHTML('<p>Hallo World</p>');

//
$pdf->Output();
 