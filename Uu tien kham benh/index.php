<?php
include_once "Patient.php";
include_once "Queue.php";

$list=new Queue();
$patient=new Patient('Smith',5);
$list->addPatient($patient);
$patient=new Patient('Jones',4);
$list->addPatient($patient);
$patient=new Patient('Fehrenbach',6);
$list->addPatient($patient);
$patient=new Patient('Brown',1);
$list->addPatient($patient);
$patient=new Patient('Ingram',1);
$list->addPatient($patient);
print_r($list->readList());