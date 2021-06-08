<?php
namespace controllers;

use config\Conn;
use model\Tax_Product;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tax_ProductController
 *
 * @author esteb
 */
class Tax_ProductController extends Conn{
    public function getAll() {

        $query = "SELECT tp.idTax_Product, tp.dateInit, tp.Product_idProduct, tp.Tax_idTax FROM Tax_Product tp ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTax_Product = new Tax_Product();
            $objTax_Product->setIdTax_Product($row[0]);
            $objTax_Product->setDateInit($row[1]);
            $objTax_Product->setProduct_idProduct($row[2]);
            $objTax_Product->setTax_idTax($row[3]);

            $arrayFinal[$row[0]] = $objTax_Product->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){
        
        $query = "SELECT tp.idTax_Product, tp.dateInit, tp.Product_idProduct, tp.Tax_idTax FROM Tax_Product tp "
                . " WHERE idTax_Product = $id ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTax_Product = new Tax_Product();
            $objTax_Product->setIdTax_Product($row[0]);
            $objTax_Product->setDateInit($row[1]);
            $objTax_Product->setProduct_idProduct($row[2]);
            $objTax_Product->setTax_idTax($row[3]);

            $arrayFinal[$row[0]] = $objTax_Product->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Tax_Product WHERE idTax_Product = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Tax_Product $objTax_ProductModel){
        $dateInit= $objTax_ProductModel->getDateInit();
        $productId = $objTax_ProductModel->getProduct_idProduct();
        $taxId= $objTax_ProductModel->getTax_idTax();
        $link = $this->conn();
        $query = "INSERT INTO Tax_Product(dateInit, Product_idProduct, Tax_idTax)"
                . " VALUES ('$dateInit' , '$productId' , '$taxId' ) ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Tax_Product $objTax_ProductModel){
        $dateInit= $objTax_ProductModel->getDateInit();
        $productId = $objTax_ProductModel->getProduct_idProduct();
        $taxId = $objTax_ProductModel->getTax_idTax();
        $idTaxPro = $objTax_ProductModel->getIdTax_Product();
        $link = $this->conn();
        $query = "UPDATE Tax_Product SET dateInit= '$dateInit' , Product_idProduct = '$productId', Tax_idTax= '$taxId' "
                . " WHERE idTax_Product = $idTaxPro";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
