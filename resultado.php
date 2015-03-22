<?php

error_reporting(0);

$sexo = $_POST['sexo'];
$nombre = $_POST['nombre'];

$p1 = $_REQUEST['p1'];
$p2 = $_REQUEST['p2'];
$p3 = $_REQUEST['p3'];
$p4 = $_REQUEST['p4'];
$p5 = $_REQUEST['p5'];
$p6 = $_REQUEST['p6'];
$p7 = $_REQUEST['p7'];
$p8 = $_REQUEST['p8'];
$p9 = $_REQUEST['p9'];
$p10 = $_REQUEST['p10'];
$p11 = $_REQUEST['p11'];
$p12 = $_REQUEST['p12'];
$p13 = $_REQUEST['p13'];
$p14 = $_REQUEST['p14'];
$p15 = $_REQUEST['p15'];
$p16 = $_REQUEST['p16'];
$p17 = $_REQUEST['p17'];
$p18 = $_REQUEST['p18'];
$p19 = $_REQUEST['p19'];
$p20 = $_REQUEST['p20'];

$fsanguineo = 0;
$fcolerico = 0;
$fmelancolico = 0;
$fflematico = 0;

$dsanguineo = 0;
$dcolerico = 0;
$dmelancolico = 0;
$dflematico = 0;

//Calculo para p1

if ($p1 == 's') {$fsanguineo = $fsanguineo + 1;}
if ($p1 == 'c') {$fcolerico = $fcolerico + 1;}
if ($p1 == 'm') {$fmelancolico = $fmelancolico + 1;}
if ($p1 == 'f') {$fflematico = $fflematico +1;}

//Calculo para p2

if ($p2 == 's') {$fsanguineo = $fsanguineo + 1;}
if ($p2 == 'c') {$fcolerico = $fcolerico + 1;}
if ($p2 == 'm') {$fmelancolico = $fmelancolico + 1;}
if ($p2 == 'f') {$fflematico = $fflematico +1;}

//Calculo para p3

if ($p3 == 's') $fsanguineo = $fsanguineo + 1;
if ($p3 == 'c') $fcolerico = $fcolerico + 1;
if ($p3 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p3 == 'f') $fflematico = $fflematico +1;

//Calculo para p4

if ($p4 == 's') $fsanguineo = $fsanguineo + 1;
if ($p4 == 'c') $fcolerico = $fcolerico + 1;
if ($p4 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p4 == 'f') $fflematico = $fflematico +1;

//Calculo para p5

if ($p5 == 's') $fsanguineo = $fsanguineo + 1;
if ($p5 == 'c') $fcolerico = $fcolerico + 1;
if ($p5 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p5 == 'f') $fflematico = $fflematico +1;

//Calculo para p6

if ($p6 == 's') $fsanguineo = $fsanguineo + 1;
if ($p6 == 'c') $fcolerico = $fcolerico + 1;
if ($p6 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p6 == 'f') $fflematico = $fflematico +1;

//Calculo para p7

if ($p7 == 's') $fsanguineo = $fsanguineo + 1;
if ($p7 == 'c') $fcolerico = $fcolerico + 1;
if ($p7 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p7 == 'f') $fflematico = $fflematico +1;

//Calculo para p8

if ($p8 == 's') $fsanguineo = $fsanguineo + 1;
if ($p8 == 'c') $fcolerico = $fcolerico + 1;
if ($p8 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p8 == 'f') $fflematico = $fflematico +1;

//Calculo para p9

if ($p9 == 's') $fsanguineo = $fsanguineo + 1;
if ($p9 == 'c') $fcolerico = $fcolerico + 1;
if ($p9 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p9 == 'f') $fflematico = $fflematico +1;

//Calculo para p10

if ($p10 == 's') $fsanguineo = $fsanguineo + 1;
if ($p10 == 'c') $fcolerico = $fcolerico + 1;
if ($p10 == 'm') $fmelancolico = $fmelancolico + 1;
if ($p10 == 'f') $fflematico = $fflematico +1;

//Calculo para p11

if ($p11 == 's') $dsanguineo = $dsanguineo + 1;
if ($p11 == 'c') $dcolerico = $dcolerico + 1;
if ($p11 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p11 == 'f') $dflematico = $dflematico +1;

//Calculo para p12

if ($p12 == 's') $dsanguineo = $dsanguineo + 1;
if ($p12 == 'c') $dcolerico = $dcolerico + 1;
if ($p12 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p12 == 'f') $dflematico = $dflematico +1;

//Calculo para p13

if ($p13 == 's') $dsanguineo = $dsanguineo + 1;
if ($p13 == 'c') $dcolerico = $dcolerico + 1;
if ($p13 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p13 == 'f') $dflematico = $dflematico +1;

//Calculo para p14

if ($p14 == 's') $dsanguineo = $dsanguineo + 1;
if ($p14 == 'c') $dcolerico = $dcolerico + 1;
if ($p14 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p14 == 'f') $dflematico = $dflematico +1;

//Calculo para p15

if ($p15 == 's') $dsanguineo = $dsanguineo + 1;
if ($p15 == 'c') $dcolerico = $dcolerico + 1;
if ($p15 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p15 == 'f') $dflematico = $dflematico +1;

//Calculo para p16

if ($p16 == 's') $dsanguineo = $dsanguineo + 1;
if ($p16 == 'c') $dcolerico = $dcolerico + 1;
if ($p16 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p16 == 'f') $dflematico = $dflematico +1;

//Calculo para p17

if ($p17 == 's') $dsanguineo = $dsanguineo + 1;
if ($p17 == 'c') $dcolerico = $dcolerico + 1;
if ($p17 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p17 == 'f') $dflematico = $dflematico +1;

//Calculo para p18

if ($p18 == 's') $dsanguineo = $dsanguineo + 1;
if ($p18 == 'c') $dcolerico = $dcolerico + 1;
if ($p18 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p18 == 'f') $dflematico = $dflematico +1;

//Calculo para p19

if ($p19 == 's') $dsanguineo = $dsanguineo + 1;
if ($p19 == 'c') $dcolerico = $dcolerico + 1;
if ($p19 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p19 == 'f') $dflematico = $dflematico +1;

//Calculo para p20

if ($p20 == 's') $dsanguineo = $dsanguineo + 1;
if ($p20 == 'c') $dcolerico = $dcolerico + 1;
if ($p20 == 'm') $dmelancolico = $dmelancolico + 1;
if ($p20 == 'f') $dflematico = $dflematico +1;

if ($sexo == 1){$sexo = 'Femenino';}
else{$sexo = 'Masculino';}

//Totalizando

$tsanguineo = $fsanguineo + $dsanguineo;
$tcolerico = $fcolerico + $dcolerico;
$tmelancolico = $fmelancolico + $dmelancolico;
$tflematico = $fflematico + $dflematico;

$rtotal = $tsanguineo + $tcolerico + $tmelancolico + $tflematico;


if ($rtotal < 20){echo 'Faltan preguntas por contestar'.$rtotal;}

else{

// Determinando el porcentaje.

$psanguineo = $tsanguineo * 100 / 20;
$pcolerico = $tcolerico * 100 / 20;
$pmelancolico = $tmelancolico * 100 / 20;
$pflematico = $tflematico * 100 / 20;

echo 'Eres: '.$psanguineo.' % Sanguineo<br>';
echo 'Eres: '.$pcolerico.' % Colerico<br>';
echo 'Eres: '.$pmelancolico.' % Melancolico<br>';
echo 'Eres: '.$pflematico.' % Flematico<br>';

	$conexion = mysql_connect("localhost", "root","");
	mysql_select_db("temperamento",$conexion);
	$sql = "INSERT INTO test(nombre,sexo,sanguineo,colerico,melancolico,flematico) VALUES ('$nombre','$sexo','$tsanguineo','$tcolerico','$tmelancolico','$tflematico')";
	mysql_query($sql);
}

?>