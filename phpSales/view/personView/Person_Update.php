<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Person;
use controllers\PersonController;

$objPersContol=new PersonController();
$objModelPerson=new Person();
$objModelPerson->setIdPerson(4);
$objModelPerson->setDocumentPerson("2736489202");
$objModelPerson->setRole_idRole("2");
$objModelPerson->setNamePerson("Esteban");
$objModelPerson->setAddress("Carrera 11 #30-23");
$objModelPerson->setPhoneNumber("3123546230");
$objModelPerson->setDocumentType("CC");
$objModelPerson->setPasswordPerson("Miclave123.");
$objModelPerson->setEmailPerson("estebitan123@gmail.com");
echo $objPersContol->update($objModelPerson);

