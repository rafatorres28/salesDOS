<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Person;
use controllers\PersonController;

$objPersContol=new PersonController();
$objModelPerson=new Person();
$objModelPerson->setDocumentPerson("495837465");
$objModelPerson->setRole_idRole("4");
$objModelPerson->setNamePerson("Fabian");
$objModelPerson->setAddress("Carrera 11 #30-25");
$objModelPerson->setPhoneNumber("3123546789");
$objModelPerson->setDocumentType("CC");
$objModelPerson->setPasswordPerson("Miclave123");
$objModelPerson->setEmailPerson("fabi123@gmail.com");
echo $objPersContol->create($objModelPerson);

