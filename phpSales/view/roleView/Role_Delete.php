<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\RoleController;

$objRoleControl = new RoleController();
echo $objRoleControl->delete(2);

