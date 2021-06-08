<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Enterprise ;
use controllers\EnterpriseController;

$objEnterContol=new EnterpriseController();
$objModelEnterprise=new Enterprise();
$objModelEnterprise->setIdEnterprise(2);
$objModelEnterprise->setAddress("cra 171 30");
$objModelEnterprise->setEnterpriseName("Colcafe");
$objModelEnterprise->setPhoneNumber("3124456787");
echo $objEnterContol->update($objModelEnterprise);

