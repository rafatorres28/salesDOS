<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controllers;

use config\Conn;
use model\Enterprise;

/**
 * Description of EnterpriseController
 *
 * @author juan_caste
 */
class EnterpriseController extends Conn {

    public function getAll() {

        $query = "SELECT e.idEnterprise, e.enterpriseName, e.address, e.phoneNumber FROM Enterprise e ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objEnterprise = new Enterprise();
            $objEnterprise->setIdEnterprise($row[0]);
            $objEnterprise->setEnterpriseName($row[1]);
            $objEnterprise->setAddress($row[2]);
            $objEnterprise->setPhoneNumber($row[3]);

            $arrayFinal[$row[0]] = $objEnterprise->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){

        $query = "SELECT e.idEnterprise, e.enterpriseName, e.address, e.phoneNumber FROM Enterprise e WHERE idEnterprise = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objEnterprise = new Enterprise();
            $objEnterprise->setIdEnterprise($row[0]);
            $objEnterprise->setEnterpriseName($row[1]);
            $objEnterprise->setAddress($row[2]);
            $objEnterprise->setPhoneNumber($row[3]);

            $arrayFinal[$row[0]] = $objEnterprise->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Enterprise WHERE idEnterprise = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }

    }
      public function create(Enterprise $objEnterpriseModel){
        $name= $objEnterpriseModel->getEnterpriseName();
        $address = $objEnterpriseModel->getAddress();
        $phoneN= $objEnterpriseModel->getPhoneNumber();
        $link = $this->conn();
        $query = "INSERT INTO Enterprise(enterpriseName, address, phoneNumber) VALUES ('$name' , '$address' , '$phoneN' ) ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Enterprise $objEnterpriseModel){
        $name= $objEnterpriseModel->getEnterpriseName();
        $address = $objEnterpriseModel->getAddress();
        $phoneN= $objEnterpriseModel->getPhoneNumber();
        $id = $objEnterpriseModel->getIdEnterprise();
        $link = $this->conn();
        $query = "UPDATE Enterprise SET enterpriseName= '$name' , address = '$address', phoneNumber= '$phoneN' WHERE idEnterprise = $id ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }

}
