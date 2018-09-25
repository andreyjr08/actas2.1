<?php
require_once '../clases/funciones.php';
include 'acta2.php';
use clases_pdo\funciones;
$usuarios = new funciones();
ini_set ('error_reporting', E_ALL);
	
   $id = $_GET['id'];
   
   $Result = $usuarios ->select_All($id);
	
	
	$pdf=new PDF('P','mm','A4');
	//$pdf->Open();
	//$pdf->AddPage();
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(55);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,6,'A QUIEN CORRESPONDA:',0,1);
	$pdf->Ln(20);
	
	/*$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(177,6, utf8_decode('El que suscribe, Encargado(a) del Departamento de Titulación del CECyTE. Hace constar que el (a) C. '.utf8_decode($Result['COMPUTADOR']).', con Clave ').utf8_decode($Result['PARA']). utf8_decode('; concluyó sus actividades en la empresa ').utf8_decode($Result['ASUNTO'].', de la ciudad de  '.$Result['DE']). utf8_decode('; con un salario base de ').utf8_decode($Result['SERIAL']) ,0,'J');
	*/
	$pdf->SetFont('Arial','',11);
    $pdf->SetFillColor(255); 
    
	$pdf->SetXY(20, 205);
    $pdf->Cell(70, 15, 'ELABORO:', 0, 0, 'C', 1);
	
	$pdf->SetXY(20, 230);
    $pdf->Cell(70, 5, '______________________', 0, 0, 'C', 1);     
    
	$pdf->SetXY(145, 205);
    $pdf->Cell(10, 15, 'Vo. Bo.', 0, 0, 'C', 1);
	
	$pdf->SetXY(145, 230);
    $pdf->Cell(10, 5, '_______________________________________', 0, 0, 'C', 1);
	
	$pdf->SetXY(20, 235);
    $pdf->Cell(70, 5, 'Nombre del Encargado', 0, 0, 'C', 1);     
	
	$pdf->SetXY(110, 235);
    $pdf->Cell(80, 5, 'Nombre del Direc', 0, 0, 'C', 1);
	
	$pdf->SetXY(20, 240);
    $pdf->Cell(70, 5, 'Encargado del Departamento..', 0, 0, 'C', 1);  
	
	$pdf->SetXY(110, 240);
    $pdf->Cell(80, 5, 'Director de la Escuela', 0, 0, 'C', 1);             
    $y      =   130;
    
	$pdf->Ln(40);
	

$pdf->Output();
?>