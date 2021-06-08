<?php
require_once './conn.php';
use config\conn;

$objConn = new conn();

$link =$objConn->conn();
$query = "SELECT p.idproductType, p.nameProductType FROM productType p ";
$resultado = mysqli_query($link, $query);
$arrayFinal = array();
while($row= $resultado->fetch_array(MYSQLI_NUM)){
    $arrayFinal[$row[0]]=$row[1];
    echo $row[0]." ".$row[1];
}
echo json_encode($arrayFinal, JSON_FORCE_OBJECT, JSON_PRETTY_PRINT);

