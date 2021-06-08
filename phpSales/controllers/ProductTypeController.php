<?php

namespace controllers;

use config\Conn;
use model\ProductType;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productTypeController
 *
 * @author esteb
 */
class ProductTypeController extends Conn {

    public function getAll() {

        $query = "SELECT pt.idProductType, pt.nameProductType FROM ProductType pt ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado, MYSQLI_NUM)) {
            $objProductType = new ProductType();
            $objProductType->setIdproductType($row[0]);
            $objProductType->setNameProductType($row[1]);

            $arrayFinal[$row[0]] = $objProductType->toString();
        }
        return json_encode($arrayFinal);
    }

     public function getById($id){
        
        $query = "SELECT pt.idProductType, pt.nameProductType FROM ProductType pt WHERE idProductType = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objProductType = new ProductType();
            $objProductType->setIdProductType($row[0]);
            $objProductType->setNameProductType($row[1]);

            $arrayFinal[$row[0]] = $objProductType->toString();
        }
        return json_encode($arrayFinal);
    }

    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM ProductType WHERE idProductType = $id";
        mysqli_query($link, $query);
        if (mysqli_affected_rows($link) == 1) {
            return json_encode("True");
        } else {
            return json_encode("False");
        }
    }

    public function create(ProductType $objProductTypeModel) {
        $name = $objProductTypeModel->getNameProductType();
        $link = $this->conn();
        $query = "INSERT INTO ProductType(nameProductType) VALUES ('$name') ";
        mysqli_query($link, $query);
        if (mysqli_affected_rows($link) == 1) {
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        } else {
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }

    public function update(ProductType $objProductTypeModel) {
        $name = $objProductTypeModel->getNameProductType();
        $id = $objProductTypeModel->getIdproductType();
        $link = $this->conn();
        $query = "UPDATE ProductType SET nameProductType= '$name' WHERE idProductType = $id ";
        mysqli_query($link, $query);
        if (mysqli_affected_rows($link) == 1) {
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        } else {
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }

}
