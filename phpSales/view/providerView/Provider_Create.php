<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Provider;
use controllers\ProviderController;

$objProvControl=new ProviderController();
$objModelProvider=new Provider();
$objModelProvider->setPhoneNumber("6457869");
$objModelProvider->setProviderName("Colanta");
$objModelProvider->setAddress("Avenida Sur #19");
$objModelProvider->setNIT("10002993847");
echo $objProvControl ->create($objModelProvider);

