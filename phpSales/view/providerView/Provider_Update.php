<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Provider;
use controllers\ProviderController;

$objProvControl=new ProviderController();
$objModelProvider=new Provider();
$objModelProvider->setIdProvider(1);
$objModelProvider->setPhoneNumber("64572539");
$objModelProvider->setProviderName("Alqueria");
$objModelProvider->setAddress("Av Norte 21-50");
$objModelProvider->setNIT("1002938756");
echo $objProvControl ->update($objModelProvider);

