<?php
require_once 'class/Moto.php';
require_once 'class/Auto.php';

$moto1 = new Moto(false,2,"Suzuki");
$moto1->arrancar();
$moto1->encenderMotor();
$moto1->arrancar();

//****************************************** */
$cantR = 4;
$motor = true;
$cantidadPuertas = 2;
$marca = "mini Cooper";
echo "<br><hr>";
$auto1 = new Auto($cantidadPuertas,$motor,$cantR,$marca);

$auto1->arrancar();
$auto1->encenderMotor();
$auto1->arrancar();

?>