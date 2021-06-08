<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Role;
use controllers\RoleController;

$objRoleControl=new RoleController();
$objModelRole=new Role();
$objModelRole->setRoleName("Cajero");
echo $objRoleControl->create($objModelRole);

