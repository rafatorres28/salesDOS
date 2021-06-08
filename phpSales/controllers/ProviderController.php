<?php
namespace controllers;

use config\Conn;
use model\Provider;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProviderController
 *
 * @author esteb
 */
class ProviderController extends Conn{
    
    public function getAll() {

        $query = "SELECT p.idProvider, p.phoneNumber, p.providerName, p.address, p.NIT  FROM Provider p ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado, MYSQLI_NUM)) {
            $objProvider = new Provider();
            $objProvider->setIdProvider($row[0]);
            $objProvider->setPhoneNumber($row[1]);
            $objProvider->setProviderName($row[2]);
            $objProvider->setAddress($row[3]);
            $objProvider->setNIT($row[4]);

            $arrayFinal[$row[0]] = $objProvider->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id) {

        $query = "SELECT p.idProvider, p.phoneNumber,  p.providerName, p.address, p.NIT FROM Provider p WHERE idProvider = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado, MYSQLI_NUM)) {
            $objProvider = new Provider();
            $objProvider->setIdProvider($row[0]);
            $objProvider->setPhoneNumber($row[1]);
            $objProvider->setProviderName($row[2]);
            $objProvider->setAddress($row[3]);
            $objProvider->setNIT($row[4]);

            $arrayFinal[$row[0]] = $objProvider->toString();
        }
        return json_encode($arrayFinal);
    }

    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Provider WHERE idProvider = $id";
        mysqli_query($link, $query);
        if (mysqli_affected_rows($link) == 1) {
            return json_encode("True");
        } else {
            return json_encode("False");
        }
    }

    public function create(Provider $objProviderModel) {
        $name = $objProviderModel->getProviderName();
        $phoneNum = $objProviderModel->getPhoneNumber();
        $address = $objProviderModel->getAddress();
        $NIT = $objProviderModel->getNIT();
        $link = $this->conn();
        $query = "INSERT INTO Provider(phoneNumber, providerName, address, NIT) "
                . " VALUES ('$phoneNum', '$name', '$address', '$NIT') ";
        mysqli_query($link, $query);
        if (mysqli_affected_rows($link) == 1) {
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        } else {
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }

    public function update(Provider $objProviderModel) {
        $name = $objProviderModel->getProviderName();
        $phoneN = $objProviderModel->getPhoneNumber();
        $address = $objProviderModel->getAddress();
        $NIT = $objProviderModel->getNIT();
        $id = $objProviderModel->getIdProvider();
        $link = $this->conn();
        $query = "UPDATE Provider SET phoneNumber= '$phoneN', providerName = '$name, address = '$address', NIT = '$NIT' WHERE idProvider = $id ";
        mysqli_query($link, $query);
        if (mysqli_affected_rows($link) == 1) {
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        } else {
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
