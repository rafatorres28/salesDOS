<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Role;
use controllers\RoleController;

$objRoleControl=new RoleController();
$objModelRole=new Role();
$objModelRole->setIdRole(3);
$objModelRole->setRoleName("Cliente");
echo $objRoleControl->update($objModelRole);

